<?php

namespace Revolut\Payment\Block\PaymentRequest;

use Revolut\Payment\Model\Source\Mode;
use Revolut\Payment\Model\Helper\ConstantValue;
use Magento\Framework\View\Element\Template;
use Magento\Framework\Registry;
use Magento\Framework\UrlInterface;
use Revolut\Payment\Gateway\Config\RevolutPaymentRequest\Config as RevolutPaymentRequestConfig;
use Revolut\Payment\Gateway\Config\Config as RevolutConfig;
use Magento\Store\Model\StoreManagerInterface;

class PaymentRequestButton extends Template
{
    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var RevolutPaymentRequestConfig
     */
    protected $configHelper;
    
    /**
     * @var RevolutConfig
     */
    protected $revolutConfigHelper;

    /**
     * @var String
     */
    public $revolutSdkUrl;
    
    /**
     * @var StoreManagerInterface
     */
    public $storeManager;
        
    /**
     * @var UrlInterface
     */
    public $urlHelper;

    /**
     * Button constructor.
     *
     * @param Template\Context $context
     * @param RevolutPaymentRequestConfig $configHelper
     * @param RevolutConfig $revolutConfigHelper
     * @param Registry $registry
     * @param StoreManagerInterface $storeManager
     * @param UrlInterface $urlHelper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        RevolutPaymentRequestConfig $configHelper,
        RevolutConfig $revolutConfigHelper,
        Registry $registry,
        StoreManagerInterface $storeManager,
        UrlInterface $urlHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);

        $this->registry = $registry;
        $this->configHelper = $configHelper;
        $this->revolutConfigHelper = $revolutConfigHelper;
        $this->storeManager = $storeManager;
        $this->urlHelper = $urlHelper;
    }

     /**
      * @return string
      */
    public function getRevolutPayPaymentMethodCode()
    {
        return \Revolut\Payment\Model\Ui\ConfigProvider::REVOLUT_PAY_CODE;
    }
    
    /**
     * @return string
     */
    public function getRevolutPaymentRequestPaymentMethodCode()
    {
        return \Revolut\Payment\Model\Ui\ConfigProvider::REVOLUT_PAYMENT_REQUEST_CODE;
    }
    
    /**
     * @return string
     */
    public function getStoreCode()
    {
        return $this->storeManager->getStore()->getCode();
    }
    
    /**
     * @return string
     */
    public function getStoreBaseUrl()
    {
        return $this->urlHelper->getBaseUrl();
    }
    
    /**
     * @return string
     */
    public function getRevolutPayRedirectUrl()
    {
        return $this->urlHelper->getUrl('revolut/process/payment');
    }
    
    /**
     * @return string
     */
    public function getLocaleCode()
    {
        return $this->storeManager->getStore()->getLocaleCode();
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        $product = $this->registry->registry('product');
        if ($product) {
            return $product->getId();
        }
        return 0;
    }
    
    /**
     * @return string
     */
    public function getProductUrl()
    {
        $product = $this->registry->registry('product');
        if ($product) {
            return $product->getProductUrl();
        }
        return '';
    }
    
    /**
     * @return string
     */
    public function getCartPageUrl()
    {
        return $this->getUrl('checkout/cart', ['_secure' => true]);
    }

    /**
     * @return string
     */
    public function getRevolutSdk()
    {
        $mode = $this->revolutConfigHelper->getModeName($this->storeManager->getStore()->getId());
        return ConstantValue::REVOLUT_SDK_URLS[$mode];
    }
}
