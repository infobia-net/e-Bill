<?php


namespace Revolut\Payment\Model;

use Magento\Framework\App\Request\Http;
use Magento\Quote\Api\CartRepositoryInterface;
use Magento\Customer\Model\Session as CustomerSession;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Customer\Model\Customer;
use Magento\Quote\Api\Data\PaymentInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Quote\Model\QuoteIdToMaskedQuoteIdInterface;
use Magento\CheckoutAgreements\Model\AgreementsProvider;
use Magento\Checkout\Model\PaymentInformationManagement;
use Magento\Checkout\Model\GuestPaymentInformationManagement;

use Revolut\Payment\Model\ChangeQuoteControl;
use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Model\RevolutOrder;
use Revolut\Payment\Model\RevolutWebhookRequestFactory;

/**
 * Class Payment
 */
class RevolutPaymentInformationManagement
{
    public const PROCESSING_ERROR = 'Order processing is in progress';

    /**
     * @var Logger
     */
    public $logger;
    
    /**
     * @var Http
     */
    public $request;

    /**
     * @var RevolutOrder
     */
    protected $revolutOrder;

    /**
     * @var CustomerSession
     */
    private $customerSession;

    /**
     * @var CartRepositoryInterface
     */
    protected $quoteRepository;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;
    
    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @var QuoteIdToMaskedQuoteIdInterface
     */
    private $quoteIdToMaskedQuoteId;
    
    /**
     * @var ChangeQuoteControl
     */
    private $changeQuoteControl;
    
    /**
     * @var PaymentInformationManagement
     */
    private $paymentInformationManagement;
    
    /**
     * @var GuestPaymentInformationManagement
     */
    private $guestPaymentInformationManagement;
    
    /**
     * @var RevolutWebhookRequestFactory
     */
    private $revolutWebhookRequestFactory;

    /**
     * @var AgreementsProvider
     */
    private $agreementsProvider;

    /**
     * @var OrderInterface
     */
    private $orderInterface;
    
    /**
     * Payment constructor.
     *
     * @param Http $request
     * @param Logger $logger
     * @param RevolutOrder $revolutOrder
     * @param CustomerSession $customerSession
     * @param CartRepositoryInterface $quoteRepository
     * @param StoreManagerInterface $storeManager
     * @param Customer $customer
     * @param QuoteIdToMaskedQuoteIdInterface $quoteIdToMaskedQuoteId
     * @param ChangeQuoteControl $changeQuoteControl
     * @param PaymentInformationManagement $paymentInformationManagement
     * @param GuestPaymentInformationManagement $guestPaymentInformationManagement
     * @param RevolutWebhookRequestFactory $revolutWebhookRequestFactory
     * @param AgreementsProvider $agreementsProvider
     * @param OrderInterface $orderInterface
     */
    public function __construct(
        Http $request,
        Logger $logger,
        RevolutOrder $revolutOrder,
        CustomerSession $customerSession,
        CartRepositoryInterface $quoteRepository,
        StoreManagerInterface $storeManager,
        Customer $customer,
        QuoteIdToMaskedQuoteIdInterface $quoteIdToMaskedQuoteId,
        ChangeQuoteControl $changeQuoteControl,
        PaymentInformationManagement $paymentInformationManagement,
        GuestPaymentInformationManagement $guestPaymentInformationManagement,
        RevolutWebhookRequestFactory $revolutWebhookRequestFactory,
        AgreementsProvider $agreementsProvider,
        OrderInterface $orderInterface
    ) {
        $this->logger = $logger;
        $this->request = $request;
        $this->customerSession = $customerSession;
        $this->revolutOrder = $revolutOrder;
        $this->quoteRepository = $quoteRepository;
        $this->storeManager = $storeManager;
        $this->customer = $customer;
        $this->quoteIdToMaskedQuoteId = $quoteIdToMaskedQuoteId;
        $this->changeQuoteControl = $changeQuoteControl;
        $this->paymentInformationManagement = $paymentInformationManagement;
        $this->guestPaymentInformationManagement = $guestPaymentInformationManagement;
        $this->revolutWebhookRequestFactory = $revolutWebhookRequestFactory;
        $this->agreementsProvider = $agreementsProvider;
        $this->orderInterface = $orderInterface;
    }

    /**
     * Place Magento Order
     *
     * @param string $publicId
     * @param PaymentInterface $paymentMethod
     * @param boolean $setAgreement
     * @return array
     */
    public function placeOrder($publicId, PaymentInterface $paymentMethod = null, $setAgreement = false)
    {
        try {
            if (empty($publicId)) {
                throw new \Exception("public id is missing");
            }
                        
            $revolutOrder = $this->revolutOrder->retrieveBy('public_id', $publicId);

            $orderId = 0;

            if (!empty($this->revolutOrder->getIncrementOrderId())) {
                $magentoOrder = $this->orderInterface->loadByIncrementId($this->revolutOrder->getIncrementOrderId());

                return [
                    'success' => true,
                    'orderId' => $magentoOrder->getId()
                ];
            }

            if ($this->isOrderAlreadyProcessed($publicId)) {
                return [
                    'orderId' => 0,
                    'success' => false,
                    'processing' => true,
                    'errorMsg' => self::PROCESSING_ERROR,
                ];
            }

            if (empty($revolutOrder->getQuoteId())) {
                throw new \Exception("Can not find quote for public id: " . $publicId);
            }

            $quote = $this->quoteRepository->getActive($revolutOrder->getQuoteId());
            $this->changeQuoteControl->setAllowed();
            $storeId = $revolutOrder->getStoreId();

            if (empty($storeId)) {
                throw new \Exception("Can not find store for public id: " . $publicId);
            }

            if (empty($revolutOrder->revolutOrder['state']) || $revolutOrder->revolutOrder['state'] == 'PENDING') {
                throw new \Exception("Order has pending state");
            }

            $this->storeManager->setCurrentStore($storeId);
            $quote->setStoreId($storeId);
            $this->storeManager->getStore()->setCurrentCurrencyCode($revolutOrder->getCurrency());
            $this->setCustomerAsLoggedIn($revolutOrder->getCustomerId());

            $this->logger->debug('start processing order for quoteId: ' . $quote->getId());

            if (!$paymentMethod) {
                $paymentMethod = $quote->getPayment();
                $setAgreement = true;
            }

            if ($setAgreement) {
                $paymentMethod->getExtensionAttributes()->setAgreementIds(
                    $this->agreementsProvider->getRequiredAgreementIds()
                );
            }

            if ($this->customerSession->isLoggedIn()) {
                $orderId = $this->paymentInformationManagement->savePaymentInformationAndPlaceOrder(
                    $quote->getId(),
                    $paymentMethod
                );
            } else {
                $maskedId = $this->quoteIdToMaskedQuoteId->execute($quote->getId());
                $orderId = $this->guestPaymentInformationManagement->savePaymentInformationAndPlaceOrder(
                    $maskedId,
                    $quote->getBillingAddress()->getEmail(), // @phpstan-ignore-line
                    $paymentMethod
                );
            }

            $this->logger->debug('order successfully processed: ' . $orderId . ' quoteId: ' . $quote->getId());
            $this->clearProcessRecord($publicId);

            return [
                'success' => true,
                'orderId' => $orderId,
                'processing' => false
            ];
        } catch (LocalizedException $e) {
            $errorMsg = $e->getMessage();
            $this->logger->debug('An error occurred while processing the order: ' . $e->getMessage());
        } catch (\Exception $e) {
            $errorMsg = $e->getMessage();
            $this->logger->debug('An error occurred while processing the order: ' . $e->getMessage());
        }

        $this->clearProcessRecord($publicId);
        
        return [
            'orderId' => 0,
            'success' => false,
            'errorMsg' => $errorMsg,
            'processing' => false
        ];
    }

    /**
     * @param int $customerId
     * @return boolean
     */
    public function setCustomerAsLoggedIn($customerId)
    {
        $this->logger->debug('maybe set customer as logged in: ' . $customerId);

        if (!$customerId) {
            return true;
        }

        $customer = $this->customer->load($customerId);

        $this->logger->debug('set customer as logged in: ' . $customerId);
        $this->customerSession = $this->customerSession->setCustomerAsLoggedIn($customer);

        return true;
    }

    /**
     * @param String $publicId
     * @return Boolean
     */
    public function isOrderAlreadyProcessed($publicId)
    {
        try {
            $this->revolutWebhookRequestFactory->create()->setPublicId($publicId)->save(); // @phpstan-ignore-line
            return false;
        } catch (\Exception $e) {
            return true;
        }
    }

    /**
     * @param String $publicId
     * @return Boolean
     */
    public function clearProcessRecord($publicId)
    {
        try {
            $this->revolutWebhookRequestFactory->create()->load($publicId, 'public_id')->delete(); // @phpstan-ignore-line
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
