<?php

namespace Revolut\Payment\Model\Api;

use http\Env\Request as Req;
use Revolut\Payment\Api\OrderManagementInterface;
use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Model\Helper\Api\RevolutApi;
use Revolut\Payment\Gateway\Helper\AmountProvider;
use Revolut\Payment\Model\RevolutOrder;
use Revolut\Payment\Gateway\Config\Config as RevolutConfig;
use Revolut\Payment\Model\Helper\ConstantValue;
use Revolut\Payment\Model\RevolutPaymentInformationManagement;
use Revolut\Payment\Model\ResourceModel\RevolutOrder\Collection;
use Revolut\Payment\Model\RevolutOrderFactory;
use Revolut\Payment\Model\ChangeQuoteControl;
use Revolut\Payment\Api\Data\OrderManagementResponseDataInterface;
use Revolut\Payment\Api\Data\OrderManagementResponseDataInterfaceFactory;


use Magento\Quote\Api\Data\PaymentInterface;
use Magento\Quote\Api\CartRepositoryInterface;
use Magento\Quote\Api\CartManagementInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Json\Helper\Data;
use Magento\Checkout\Model\Session;
use Magento\Customer\Model\Session as CustomerSession;
use Magento\Framework\Webapi\Rest\Request;
use Magento\Quote\Model\Quote;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Model\OrderFactory;
use Magento\Quote\Model\QuoteFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;

class OrderManagement implements OrderManagementInterface
{
    /**
     * @var AmountProvider
     */
    protected $amountProvider;
    
    /**
     * @var RevolutApi
     */
    protected $revolutApi;

    /**
     * @var Data
     */
    protected $jsonHelper;

    /**
     * @var Session
     */
    protected $checkoutSession;
    
    /**
     * @var CustomerSession
     */
    protected $customerSession;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var RevolutOrder
     */
    protected $revolutOrder;
    
    /**
     * @var Collection
     */
    protected $revolutOrderCollection;

    /**
     * @var RevolutPaymentInformationManagement
     */
    protected $revolutPaymentInformationManagement;

    /**
     * @var Logger
     */
    protected $logger;
    
    /**
     * @var OrderInterface
     */
    private $orderInterface;
    
    /**
     * @var OrderFactory
     */
    private $orderFactory;

    /**
     * @var EventManager
     */
    protected $eventManager;

    /**
     * @var QuoteFactory
     */
    protected $quoteFactory;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;
    
    /**
     * @var RevolutOrderFactory
     */
    protected $revolutOrderFactory;

    /**
     * @var CartRepositoryInterface
     */
    private $cartRepository;

    /**
     * @var CartManagementInterface
     */
    private $cartManagement;

    /**
     * @var ChangeQuoteControl
     */
    private $changeQuoteControl;
    
    /**
     * @var OrderManagementResponseDataInterfaceFactory
     */
    private $orderManagementResponse;
    
    /**
     * @var RevolutConfig
     */
    private $config;

    /**
     * @param AmountProvider $amountProvider
     * @param Data $jsonHelper
     * @param RevolutApi $revolutApi
     * @param CustomerSession $customerSession
     * @param Session $checkoutSession
     * @param RevolutOrder $revolutOrder
     * @param Collection $revolutOrderCollection
     * @param OrderInterface $orderInterface
     * @param OrderFactory $orderFactory
     * @param Request $request
     * @param Logger $logger
     * @param RevolutPaymentInformationManagement $revolutPaymentInformationManagement
     * @param EventManager $eventManager
     * @param QuoteFactory $quoteFactory
     * @param StoreManagerInterface $storeManager
     * @param RevolutOrderFactory $revolutOrderFactory
     * @param CartRepositoryInterface $cartRepository
     * @param CartManagementInterface $cartManagement
     * @param ChangeQuoteControl $changeQuoteControl
     * @param OrderManagementResponseDataInterfaceFactory $orderManagementResponse
     * @param RevolutConfig $config
     */
    public function __construct(
        AmountProvider $amountProvider,
        Data $jsonHelper,
        RevolutApi $revolutApi,
        CustomerSession $customerSession,
        Session $checkoutSession,
        RevolutOrder $revolutOrder,
        Collection $revolutOrderCollection,
        OrderInterface $orderInterface,
        OrderFactory $orderFactory,
        Request $request,
        Logger $logger,
        RevolutPaymentInformationManagement $revolutPaymentInformationManagement,
        EventManager $eventManager,
        QuoteFactory $quoteFactory,
        StoreManagerInterface $storeManager,
        RevolutOrderFactory $revolutOrderFactory,
        CartRepositoryInterface $cartRepository,
        CartManagementInterface $cartManagement,
        ChangeQuoteControl $changeQuoteControl,
        OrderManagementResponseDataInterfaceFactory $orderManagementResponse,
        RevolutConfig $config
    ) {
        $this->revolutApi = $revolutApi;
        $this->amountProvider = $amountProvider;
        $this->jsonHelper = $jsonHelper;
        $this->checkoutSession = $checkoutSession;
        $this->customerSession = $customerSession;
        $this->request = $request;
        $this->revolutOrder = $revolutOrder;
        $this->revolutOrderCollection = $revolutOrderCollection;
        $this->orderInterface = $orderInterface;
        $this->orderFactory = $orderFactory;
        $this->logger = $logger;
        $this->revolutPaymentInformationManagement = $revolutPaymentInformationManagement;
        $this->eventManager = $eventManager;
        $this->quoteFactory = $quoteFactory;
        $this->storeManager = $storeManager;
        $this->revolutOrderFactory = $revolutOrderFactory;
        $this->cartRepository = $cartRepository;
        $this->cartManagement = $cartManagement;
        $this->changeQuoteControl = $changeQuoteControl;
        $this->orderManagementResponse = $orderManagementResponse;
        $this->config = $config;
    }

    /**
     * Get or Create Magento Quote
     *
     * @return Quote
     */
    public function getOrCreateQuote()
    {
        $quote = $this->checkoutSession->getQuote();

        if (!$quote->getId()) {
            $this->changeQuoteControl->setAllowed();
            $customer = $this->customerSession->getCustomer();
            $customerId = $customer->getId();
            if ($customerId) {
                $quoteId = $this->cartManagement->createEmptyCartForCustomer($customerId); // @phpstan-ignore-line
            } else {
                $quoteId = $this->cartManagement->createEmptyCart();
            }
            
            $quote = $this->cartRepository->get($quoteId);
            $this->checkoutSession->replaceQuote($quote); // @phpstan-ignore-line
            $quote = $this->checkoutSession->getQuote();
        }

        return $quote;
    }

    /**
     * Create order
     *
     * @api
     * @param bool $fastCheckout
     * @param bool $revolutPayFastCheckout
     * @return OrderManagementResponseDataInterface
     */
    public function create($fastCheckout = false, $revolutPayFastCheckout = false)
    {
        try {
            $quote = $this->getOrCreateQuote();
            $customer = $this->customerSession->getCustomer();
            $quoteId = $quote->getId();
            $customerId = $customer->getId();

            if (empty($quoteId)) {
                throw new LocalizedException(__('Can not load shopping cart'));
            }

            $storeId = $this->storeManager->getStore()->getId();
            $currency = $this->storeManager->getStore()->getCurrentCurrency();
           
            $quote->setStoreId($storeId);
            $quote->setQuoteCurrencyCode($currency->getCode());

            $amount = $quote->getGrandTotal();
            $currency = $quote->getQuoteCurrencyCode();
            $storeId = $quote->getStoreId();
            
            if (empty($currency) || empty($storeId) || empty($amount)) {
                throw new LocalizedException(__('Can not load shopping cart'));
            }

            $amount = $this->amountProvider->convert($amount, $currency);

            $this->logger->debug('create order: ' . $amount . ' ' . $currency . ' storeId: ' . $storeId . ' customerId: ' . $customerId);
            
            $revolutOrderModel = $this->revolutOrderCollection->getOrderByQuoteAndStore($quoteId, $storeId)->getLastItem(); // @phpstan-ignore-line
            $revolutOrder = $revolutOrderModel->create(['amount' => $amount, 'currency'=> $currency], $quoteId, $customerId, $storeId, $fastCheckout); // @phpstan-ignore-line
            
            if (!$revolutOrder) {
                $revolutOrderModel = $this->revolutOrderFactory->create();
                $revolutOrder = $revolutOrderModel->create(['amount' => $amount, 'currency'=> $currency], $quoteId, $customerId, $storeId, $fastCheckout); // @phpstan-ignore-line
            }
            
            if ($revolutPayFastCheckout) {
                $deliveryMethodAmount = isset($revolutOrder->revolutOrder['delivery_method']['amount']) ?
                                    (int)$revolutOrder->revolutOrder['delivery_method']['amount'] : 0;

                $subTotalAmount = $quote->getGrandTotal() - $quote->getShippingAddress()->getShippingAmount();
                $subTotalAmount = $this->amountProvider->convert($subTotalAmount, $currency) + $deliveryMethodAmount;
                $revolutOrder->update(['amount' => $subTotalAmount, 'currency'=> $currency], $fastCheckout);
            }

            return $this->orderManagementResponse->create()
                    ->setSuccess(true)
                    ->setPublicId($revolutOrder->getPublicId())
                    ->setCustomerId($customerId)
                    ->setQuoteId($quoteId)
                    ->setStoreId($storeId)
                    ->setCurrency($currency)
                    ->setAmount($amount)
                    ->setPublicKey($this->revolutApi->getMerchantPublicKey($storeId))
                    ->setIsRewardBannerActive($this->config->getIsRewardBannerActive($storeId))
                    ->setAvailableCardBrands($this->revolutApi->getAvailableCardBrands($storeId, $currency, $amount));
        } catch (\Exception $e) {
            $this->logger->debug('An error occurred while processing the order: ' . $e->getMessage());
            return $this->orderManagementResponse->create()
                    ->setSuccess(false)
                    ->setMessage('An error occurred while processing the order: ' . $e->getMessage());
        }
    }
        
    /**
     * Handle webhook callback
     *
     * @api
     * @param String $orderId
     * @param String $event
     * @return string[]
     */
    public function webhook(String $orderId, String $event)
    {
        $this->logger->debug('webhook call: ' . $orderId . ' ' . $event);

        if (empty($orderId) || empty($event) || !in_array($event, ConstantValue::WEBHOOK_EVENTS)) {
            return ['empty request'];
        }

        try {
            $this->revolutOrder = $this->revolutOrder->retrieveBy('revolut_order_id', $orderId);
            if (empty($this->revolutOrder->revolutOrder['state']) || $this->revolutOrder->revolutOrder['state'] == 'PENDING') {
                return ['payment is not completed : ' . $orderId];
            }
        } catch (\Exception $e) {
            return ['payment not found: ' . $orderId];
        }

        if ($event == ConstantValue::WEBHOOK_EVENT_ORDER_AUTHORISED && empty($this->revolutOrder->getIncrementOrderId())) {
            if ($this->revolutOrder->getIsFastCheckout() || !$this->revolutOrder->isRevolutPayPayment()) {
                return [];
            }

            $result = $this->revolutPaymentInformationManagement->placeOrder($this->revolutOrder->getPublicId());
            $orderId = $result['orderId'] ? $result['orderId'] : 0;

            if ($orderId) {
                return ['magento order has been processed: ' . $orderId];
            }
            
            return ['magento order could not processed'];
        }

        if ($event == ConstantValue::WEBHOOK_EVENT_ORDER_AUTHORISED) {
            return ['magento order already processed'];
        }

        $magentoOrder = $this->orderInterface->loadByIncrementId($this->revolutOrder->getIncrementOrderId());
        
        if (!$magentoOrder) {
            return ['order not found'];
        }

        $magentoPayment = $magentoOrder->getPayment();

        if (!$magentoPayment) {
            return ['order payment not found'];
        }

        $webhookAction = $magentoPayment->getAdditionalInformation(ConstantValue::WEBHOOK_ACTION);
        switch ($webhookAction) {
            case ConstantValue::WEBHOOK_ACTION_ACCEPT_PAYMENT:
                $magentoPayment->accept();
                $magentoOrder->save();
                $this->logger->debug('magento payment accepted: ' . $orderId);
                return ['success'];
            case ConstantValue::WEBHOOK_ACTION_CAPTURE_PAYMENT:
                $magentoPayment->capture();
                $magentoOrder->save();
                $this->logger->debug('magento payment captured: ' . $orderId);
                return ['success'];
            case ConstantValue::WEBHOOK_ACTION_PAYMENT_COMPLETED:
                $this->logger->debug('magento payment already completed: ' . $orderId);
                return ['success'];
        }

        $this->logger->debug('webhook action not found: ' . $orderId);
        return ['webhook action not found'];
    }

    /**
     * Process Magento Order
     *
     * @api
     * @param PaymentInterface $paymentMethod
     * @return OrderManagementResponseDataInterface
     */
    public function placeOrder(PaymentInterface $paymentMethod)
    {
        try {
            $additionalData = $paymentMethod->getAdditionalData();
            $publicId = isset($additionalData['publicId']) ? $additionalData['publicId'] : '';
            $setAgreement = isset($additionalData['setAgreement']) ? (bool)$additionalData['setAgreement'] : false;

            if (empty($publicId)) {
                throw new LocalizedException(__('publicId can not be empty'));
            }

            $this->revolutOrder = $this->revolutOrder->retrieveBy('public_id', $publicId);
            
            $orderProcessingResult = [];

            if (empty($this->revolutOrder->getIncrementOrderId())) {
                $orderProcessingResult = $this->revolutPaymentInformationManagement->placeOrder($publicId, $paymentMethod, $setAgreement);
                $this->revolutOrder = $this->revolutOrder->retrieveBy('public_id', $publicId);
            }
            
            if (empty($this->revolutOrder->getIncrementOrderId())) {
                $errorMsg = !empty($orderProcessingResult['errorMsg']) ? $orderProcessingResult['errorMsg']: 'Something went wrong.';
                throw new LocalizedException(__($errorMsg));
            }
                        
            $order = $this->orderFactory->create()->loadByIncrementId($this->revolutOrder->getIncrementOrderId());
            $orderId = $order->getId() ? $order->getId() : $this->revolutOrder->getIncrementOrderId();

            $this->checkoutSession->setLastQuoteId($this->revolutOrder->getQuoteId())
                ->setLastSuccessQuoteId($this->revolutOrder->getQuoteId())
                ->setLastOrderId($orderId)
                ->setLastRealOrderId($this->revolutOrder->getIncrementOrderId());
                
            $store = $this->storeManager->getStore($this->revolutOrder->getStoreId());
            
            return $this->orderManagementResponse->create()
                    ->setSuccess(true)
                    ->setRedirectUrl($store->getBaseUrl() . 'checkout/onepage/success');
        } catch (\Exception $e) {
            $this->logger->debug('placeOrder Exception: ' . $e->getMessage());
            $inProgress = isset($orderProcessingResult) && isset($orderProcessingResult['processing']) ? $orderProcessingResult['processing'] : false;
            return $this->orderManagementResponse->create()
                    ->setSuccess(false)
                    ->setInProgress($inProgress)
                    ->setMessage($e->getMessage());
        }
    }

    /**
     * Cancel order on revolut
     *
     * @api
     * @param String $publicId
     * @param String $cancelReason
     * @return OrderManagementResponseDataInterface
     */
    public function cancel(String $publicId, String $cancelReason)
    {
        try {
            $this->logger->debug('cancel order : ' . $publicId . ' - '. $cancelReason);
            $this->revolutOrder->cancel($publicId);
        } catch (\Exception $e) {
            $this->logger->debug('An error occured during order cancellation : ' . $publicId . ' - ' . $e->getMessage());
        }

        return $this->orderManagementResponse->create()->setSuccess(true);
    }
}
