<?php


namespace Revolut\Payment\Controller\Process;

use Magento\Quote\Model\QuoteFactory;
use Magento\Framework\App\Request\Http;
use Magento\Framework\App\ActionInterface;
use Magento\Quote\Model\Quote\Payment as QuotePaymentData;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Controller\Result\RedirectFactory;

use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Model\RevolutOrder;
use Revolut\Payment\Model\Ui\ConfigProvider;
use Revolut\Payment\Model\Api\OrderManagement;
use Revolut\Payment\Model\Api\FastCheckoutManagement;
use Revolut\Payment\Model\RevolutPaymentInformationManagement;

class Payment implements ActionInterface
{
    /**
     * @var QuoteFactory
     */
    protected $quoteFactory;

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
     * @var RedirectFactory
     */
    protected $redirectFactory;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;
    
    /**
     * @var RevolutPaymentInformationManagement
     */
    protected $revolutPaymentInformationManagement;
    
    /**
     * @var FastCheckoutManagement
     */
    protected $fastCheckoutManagement;
    
    /**
     * @var OrderManagement
     */
    protected $orderManagement;
    
    /**
     * @var QuotePaymentData
     */
    protected $quotePaymentData;

    /**
     * Payment constructor.
     *
     * @param Http $request
     * @param Logger $logger
     * @param QuoteFactory $quoteFactory
     * @param RevolutOrder $revolutOrder
     * @param RedirectFactory $redirectFactory
     * @param StoreManagerInterface $storeManager
     * @param RevolutPaymentInformationManagement $revolutPaymentInformationManagement
     * @param FastCheckoutManagement $fastCheckoutManagement
     * @param OrderManagement $orderManagement
     * @param QuotePaymentData $quotePaymentData
     */
    public function __construct(
        Http $request,
        Logger $logger,
        QuoteFactory $quoteFactory,
        RevolutOrder $revolutOrder,
        RedirectFactory $redirectFactory,
        StoreManagerInterface $storeManager,
        RevolutPaymentInformationManagement $revolutPaymentInformationManagement,
        FastCheckoutManagement $fastCheckoutManagement,
        OrderManagement $orderManagement,
        QuotePaymentData $quotePaymentData
    ) {
        $this->request = $request;
        $this->logger = $logger;
        $this->quoteFactory = $quoteFactory;
        $this->revolutOrder = $revolutOrder;
        $this->redirectFactory = $redirectFactory;
        $this->storeManager = $storeManager;
        $this->revolutPaymentInformationManagement = $revolutPaymentInformationManagement;
        $this->fastCheckoutManagement = $fastCheckoutManagement;
        $this->orderManagement = $orderManagement;
        $this->quotePaymentData = $quotePaymentData;
    }

    public function execute()
    {
        try {
            $publicId = $this->request->getParam('_rp_oid');

            if (empty($publicId)) {
                throw new \Exception("public id is missing");
            }
                
            $revolutOrder = $this->revolutOrder->retrieveBy('public_id', $publicId);

            if (empty($revolutOrder->getQuoteId())) {
                throw new \Exception("Can not find quote for public id: " . $publicId);
            }

            $quote = $this->quoteFactory->create()->load($revolutOrder->getQuoteId());
            $storeId = $quote->getStoreId();

            if (empty($storeId)) {
                throw new \Exception("Can not find store for public id: " . $publicId);
            }

            $store = $this->storeManager->getStore($storeId);

            if (!empty($this->request->getParam('_rp_fr'))) {
                return $this->redirectFactory->create()->setUrl($store->getBaseUrl() . 'checkout?_rp_fr=' . $this->request->getParam('_rp_fr') . '#payment');
            }

            if ($revolutOrder->getIsFastCheckout()) {
                $this->logger->debug('run required checks for fast checkout: ' . $publicId);
                $this->fastCheckoutManagement->validateOrder($revolutOrder->getPublicId());
            }

            $this->quotePaymentData->setAdditionalData(\json_encode([ // @phpstan-ignore-line
                'publicId' => $revolutOrder->getPublicId(),
                'setAgreement' => true
            ]));
            
            $this->quotePaymentData->setMethod(ConfigProvider::REVOLUT_PAY_CODE);

            for ($attempt=0; $attempt < 5; $attempt++) {
                $this->logger->debug('Order processing attempt - ' . $attempt);

                $result = $this->orderManagement->placeOrder($this->quotePaymentData);

                if ($result->getSuccess() || !$result->getInProgress()) {
                    break;
                }

                sleep(2);
            }
                        
            if ($result->getSuccess()) {
                return $this->redirectFactory->create()->setUrl($result->getRedirectUrl());
            }

            throw new \Exception("Can not place order : " . $result->getMessage());
        } catch (\Exception $e) {
            $this->logger->debug('An error occurred while processing the Magento order: ' . $e->getMessage());
        }

        $errorMsg = 'Something went wrong. Payment will be canceled';
        $baseUrl = isset($store) ? $baseUrl = $store->getBaseUrl() : '/';
        
        switch ($this->request->getParam('page')) {
            case 'cart':
                $redirectUrl = $baseUrl . 'checkout/cart?_rp_fr=' . $errorMsg;
                break;
            case 'checkout':
                $redirectUrl = $baseUrl . 'checkout?_rp_fr=' . $errorMsg . '#payment';
                break;
            default:
                $redirectUrl = $baseUrl . 'checkout/cart?_rp_fr=' . $errorMsg;
                break;
        }
        
        return $this->redirectFactory->create()->setUrl($redirectUrl);
    }
}
