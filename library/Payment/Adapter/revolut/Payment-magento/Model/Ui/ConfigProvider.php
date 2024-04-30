<?php

namespace Revolut\Payment\Model\Ui;

use Magento\Framework\UrlInterface;
use Magento\Framework\Locale\Resolver;
use Magento\Framework\App\Request\Http;
use Revolut\Payment\Gateway\Config\Config;
use Revolut\Payment\Gateway\Config\RevolutPaymentRequest\Config as PrConfig;
use Revolut\Payment\Gateway\Config\RevolutPay\Config as RevConfig;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\Session\SessionManagerInterface;

class ConfigProvider implements ConfigProviderInterface
{
    public const GATEWAY_CODE = 'revolut';
    public const CODE = 'revolut_card';
    public const REVOLUT_PAY_CODE = 'revolut_pay';
    public const REVOLUT_PAYMENT_REQUEST_CODE = 'revolut_payment_request';

    /**
     * @var Config
     */
    private $config;
    
    /**
     * @var PrConfig
     */
    private $prConfig;

    /**
     * @var RevConfig
     */
    private $revConfig;
    
    /**
     * @var UrlInterface
     */
    private $urlBuilder;

    /**
     * @var Http
     */
    private $request;
    
    /**
     * @var SessionManagerInterface
     */
    private $session;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;
        
    /**
     * @var Resolver
     */
    protected $localeResolver;

    /**
     * @param Config $config
     * @param PrConfig $prConfig
     * @param RevConfig $revConfig
     * @param Http $request
     * @param Resolver $localeResolver
     * @param UrlInterface $urlBuilder
     * @param SessionManagerInterface $session
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        Config $config,
        PrConfig $prConfig,
        RevConfig $revConfig,
        Http $request,
        Resolver $localeResolver,
        UrlInterface $urlBuilder,
        SessionManagerInterface $session,
        StoreManagerInterface $storeManager
    ) {
        $this->config = $config;
        $this->prConfig = $prConfig;
        $this->revConfig = $revConfig;
        $this->request = $request;
        $this->urlBuilder = $urlBuilder;
        $this->localeResolver = $localeResolver;
        $this->session = $session;
        $this->storeManager = $storeManager;
    }

    /**
     * Retrieve checkout configuration
     *
     * @return array
     */
    public function getConfig()
    {
        $storeId = $this->session->getStoreId();
        return [
            'payment' => [
                self::GATEWAY_CODE => [
                    'mode' => $this->config->getModeName($storeId),
                    'originUrl' => $this->getStoreDomain(),
                    'locale' => $this->getStoreLocale(),
                    'revolutSdk' => $this->config->getSdkUrl($storeId),
                    'revolutBannerSdk' => $this->config->getBannerSdkUrl($storeId),
                    'prButtonStyle' => $this->prConfig->getPaymentRequestButtonStyleConfigs($storeId),
                    'redirectUrl' => $this->urlBuilder->getUrl('revolut/process/payment', ['_secure' => $this->request->isSecure()]),
                    'revButtonStyle' => $this->revConfig->getRevolutPayButtonStyleConfigs($storeId),
                    'checkoutUrl' => $this->urlBuilder->getUrl('checkout', ['_secure' => $this->request->isSecure()]) . '#payment',
                    'cardholderNameField' => $this->config->isCardholderNameFieldActive($storeId),
                ],
            ]
        ];
    }

    /**
     * @return string|false store locale
     */
    public function getStoreLocale()
    {
        $currentLocaleCode = $this->localeResolver->getLocale(); // en_EN
        return strstr($currentLocaleCode, '_', true);
    }
    
    /**
     * @return string store domain
     */
    public function getStoreDomain()
    {
        $mageDomain = parse_url($this->storeManager->getStore()->getBaseUrl()); // @phpstan-ignore-line
        
        if (empty($mageDomain) || empty($mageDomain['host'])) {
            return '';
        }

        return $mageDomain['host'];
    }
}
