<?php

namespace Revolut\Payment\Gateway\Config;

use Magento\Framework\Encryption\Encryptor;
use Revolut\Payment\Model\Source\Mode;
use Magento\Store\Model\ScopeInterface;
use Revolut\Payment\Model\Helper\ConstantValue;
use Revolut\Payment\Model\ResourceModel\CustomConfigModel;
use Magento\Payment\Model\MethodInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Config\Model\ResourceModel\Config as ConfigInterface;

class Config extends \Magento\Payment\Gateway\Config\Config
{
    public const IS_ACTIVE = 'active';
    public const API_MODE = 'api_mode';
    public const API_KEY_LIVE = 'api_key_live';
    public const API_KEY_SANDBOX = 'api_key_sandbox';
    public const PAYMENT_ACTION = 'payment_action';
    public const PUBLIC_KEY_LIVE = 'public_key_live';
    public const PUBLIC_KEY_SANDBOX = 'public_key_sandbox';
    public const ENABLE_REWARD_BANNER = 'enable_reward_banner';
    public const KEY_TITLE = 'title';
    public const WEBHOOK_SETUP = 'webhook_setup';
    public const ADDRESS_VALIDATION_WEBHOOK_SETUP = 'address_validation_webhook_setup';
    public const ADDRESS_VALIDATION_WEBHOOK_URL = 'address_validation_webhook_url';
    public const ADDRESS_VALIDATION_WEBHOOK_SIGNING_KEY = 'address_validation_signing_key';
    public const LOCATION_SETUP_ID = 'revolut_location_setup_id';
    public const APPLEPAY_DOMAIN_SETUP = 'apple_pay_domain_setup';
    public const CONFIG_CODE = 'payment/revolut_card/';

    /**
     * @var Encryptor
     */
    protected $encryptor;

    /**
     * @var ConfigInterface
     */
    protected $configInterface;
    
    /**
     * @var CustomConfigModel
     */
    protected $customConfigModel;

    /**
     * @var TypeListInterface
     */
    protected $cacheTypeList;

    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param Encryptor $encryptor
     * @param ConfigInterface $configInterface
     * @param CustomConfigModel $customConfigModel
     * @param TypeListInterface $cacheTypeList
     * @param string|null $methodCode
     * @param string $pathPattern
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Encryptor $encryptor,
        ConfigInterface $configInterface,
        CustomConfigModel $customConfigModel,
        TypeListInterface $cacheTypeList,
        $methodCode = null,
        $pathPattern = self::DEFAULT_PATH_PATTERN
    ) {
        parent::__construct($scopeConfig, $methodCode, $pathPattern);
        
        $this->encryptor = $encryptor;
        $this->configInterface = $configInterface;
        $this->customConfigModel = $customConfigModel;
        $this->cacheTypeList = $cacheTypeList;
    }

    /**
     * Check if gateway enabled
     *
     * @param  int $storeId
     * @return bool
     */
    public function isActive($storeId = 0)
    {
        return (bool) $this->getValue(self::IS_ACTIVE, $storeId);
    }
    
    /**
     * Get Webhook Setup Result
     *
     * @param  int $storeId
     * @return mixed
     */
    public function getWebhookSetupResult($storeId)
    {
        return $this->customConfigModel->getConfig(
            self::CONFIG_CODE . self::WEBHOOK_SETUP . '_' . $this->getModeName($storeId),
            ScopeInterface::SCOPE_STORE,
            $storeId
        ) || !$this->isLiveMode($storeId);
    }
    
    /**
     * Get Webhook Setup Result
     *
     * @param  int $storeId
     * @return mixed
     */
    public function getApplePayDomainSetupResult($storeId = 0)
    {
        return $this->customConfigModel->getConfig(
            self::CONFIG_CODE . self::APPLEPAY_DOMAIN_SETUP,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
    
    /**
     * Save Webhook Setup Result
     *
     * @param  int $result
     * @param  int $storeId
     * @return void
     */
    public function saveWebhookSetupResult($result, $storeId)
    {
        $this->configInterface->saveConfig(
            self::CONFIG_CODE . self::WEBHOOK_SETUP . '_' . $this->getModeName($storeId),
            (string)$result,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
        $this->cacheTypeList->cleanType(\Magento\Framework\App\Cache\Type\Config::TYPE_IDENTIFIER);
    }
    
    /**
     * Save Webhook Setup Result
     *
     * @param  int $result
     * @param  int $storeId
     * @return void
     */
    public function saveAddressValidationWebhookSetupResult($result, $storeId)
    {
        $this->configInterface->saveConfig(
            self::CONFIG_CODE . self::ADDRESS_VALIDATION_WEBHOOK_SETUP . '_' . $this->getModeName($storeId),
            (string)$result,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
        $this->cacheTypeList->cleanType(\Magento\Framework\App\Cache\Type\Config::TYPE_IDENTIFIER);
    }

    /**
     * @param int $storeId
     * @return int
     */
    public function getAddressValidationWebhookSetupResult($storeId)
    {
        return $this->customConfigModel->getConfig(
            self::CONFIG_CODE . self::ADDRESS_VALIDATION_WEBHOOK_SETUP . '_' . $this->getModeName($storeId),
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
    
    /**
     * @param string $url
     * @param string $locationId
     * @param int $storeId
     * @return void
     */
    public function saveAddressValidationWebhookSetupUrl($url, $locationId, $storeId)
    {
        $this->configInterface->saveConfig(
            self::CONFIG_CODE . self::ADDRESS_VALIDATION_WEBHOOK_URL . '_' . $this->getModeName($storeId) . '_' . $locationId,
            (string)$url,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
        $this->cacheTypeList->cleanType(\Magento\Framework\App\Cache\Type\Config::TYPE_IDENTIFIER);
    }
    
    /**
     * @param string $locationId
     * @param int $storeId
     * @return mixed
     */
    public function getAddressValidationWebhookSetupUrl($locationId, $storeId)
    {
        return $this->customConfigModel->getConfig(
            self::CONFIG_CODE . self::ADDRESS_VALIDATION_WEBHOOK_URL . '_' . $this->getModeName($storeId) . '_' . $locationId,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * @param string $signingKey
     * @param int $storeId
     * @return void
     */
    public function saveAddressValidationWebhookSetupSigningKey($signingKey, $storeId)
    {
        $this->configInterface->saveConfig(
            self::CONFIG_CODE . self::ADDRESS_VALIDATION_WEBHOOK_SIGNING_KEY . '_' . $this->getModeName($storeId),
            (string)$signingKey,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
        $this->cacheTypeList->cleanType(\Magento\Framework\App\Cache\Type\Config::TYPE_IDENTIFIER);
    }
    
    /**
     * @param string $locationId
     * @param int $storeId
     * @return void
     */
    public function saveLocationSetupId($locationId, $storeId)
    {
        $this->configInterface->saveConfig(
            self::CONFIG_CODE . self::LOCATION_SETUP_ID . '_' . $this->getModeName($storeId),
            (string)$locationId,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
        $this->cacheTypeList->cleanType(\Magento\Framework\App\Cache\Type\Config::TYPE_IDENTIFIER);
    }

    /**
     * @param int $storeId
     * @return string|mixed
     */
    public function getLocationSetupId($storeId)
    {
        return $this->customConfigModel->getConfig(
            self::CONFIG_CODE . self::LOCATION_SETUP_ID . '_' . $this->getModeName($storeId),
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Save Webhook Setup Result
     *
     * @param string $result
     * @param int $storeId
     * @return void
     */
    public function saveApplePayDomainSetupResult($result, $storeId = 0)
    {
        $this->configInterface->saveConfig(
            self::CONFIG_CODE . self::APPLEPAY_DOMAIN_SETUP,
            (string)$result,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
        $this->cacheTypeList->cleanType(\Magento\Framework\App\Cache\Type\Config::TYPE_IDENTIFIER);
    }
    
    /**
     * Get title of payment
     *
     * @param int $storeId
     * @return string
     */
    public function getTitle($storeId = 0)
    {
        return (string) $this->getValue(self::KEY_TITLE, $storeId);
    }
    
    /**
     * Get payment action
     *
     * @param int|null $storeId
     * @return mixed
     */
    public function getPaymentAction($storeId)
    {
        return $this->getValue(self::PAYMENT_ACTION, $storeId);
    }
    
    /**
     * Get payment action
     *
     * @param int|null $storeId
     * @return bool|mixed
     */
    public function getIsRewardBannerActive($storeId)
    {
        return (bool)$this->getValue(self::ENABLE_REWARD_BANNER, $storeId);
    }

    /**
     * Check if payment action is manual
     *
     * @param int $storeId
     * @return bool
     */
    public function isManualCapture($storeId = 0)
    {
        return $this->getValue(self::PAYMENT_ACTION, $storeId) != MethodInterface::ACTION_AUTHORIZE_CAPTURE;
    }
    
    /**
     * Check if payment action is automatic
     *
     * @param int $storeId
     * @return bool
     */
    public function isAutomaticCapture($storeId = 0)
    {
        return $this->getValue(self::PAYMENT_ACTION, $storeId) == MethodInterface::ACTION_AUTHORIZE_CAPTURE;
    }
    
    /**
     * Check Payment configuration mode is production
     *
     * @param int $storeId
     * @return bool
     */
    public function isLiveMode($storeId = 0)
    {
        return $this->getValue(self::API_MODE, $storeId) == Mode::PRODUCTION_MODE;
    }
    
    /**
     * Get Payment configuration mode name
     *
     * @param int $storeId
     * @return string
     */
    public function getModeName($storeId = 0)
    {
        return $this->isLiveMode($storeId) ? ConstantValue::PROD_MODE : ConstantValue::SANDBOX_MODE;
    }
    
    /**
     * Get JS SDK url
     *
     * @param int $storeId
     * @return string
     */
    public function getSdkUrl($storeId = 0)
    {
        return ConstantValue::REVOLUT_SDK_URLS[$this->getModeName($storeId)];
    }
    
    /**
     * Get Reward Banner JS SDK url
     *
     * @param int $storeId
     * @return string
     */
    public function getBannerSdkUrl($storeId = 0)
    {
        return ConstantValue::REVOLUT_BANNER_SDK_URLS[$this->getModeName($storeId)];
    }

    /**
     * Get api key
     *
     * @param int $storeId
     * @return mixed
     */
    public function getApiKey($storeId = 0)
    {
        if ($this->isLiveMode($storeId)) {
            return $this->getLiveApiKey($storeId);
        }

        return $this->getSandboxApiKey($storeId);
    }
    
    /**
     * Check api key
     *
     * @param int $storeId
     * @return bool
     */
    public function isApiKeyConfigured($storeId = 0)
    {
        return !empty($this->getApiKey($storeId));
    }
    
    /**
     * Get api key
     *
     * @param int $storeId
     * @return mixed
     */
    public function getLiveApiKey($storeId = 0)
    {
        $value = (string) $this->getValue(self::API_KEY_LIVE, $storeId);
        return $value ? $this->encryptor->decrypt($value) : $value;
    }
    
    /**
     * Get sandbox api key
     *
     * @param int $storeId
     * @return mixed
     */
    public function getSandboxApiKey($storeId = 0)
    {
        $value = (string) $this->getValue(self::API_KEY_SANDBOX, $storeId);
        return $value ? $this->encryptor->decrypt($value) : $value;
    }

    /**
     * Get public api key
     *
     * @param int $storeId
     * @return mixed
     */
    public function getPublicApiKey($storeId = 0)
    {
        return $this->customConfigModel->getConfig(
            self::CONFIG_CODE . ($this->isLiveMode($storeId) ? self::PUBLIC_KEY_LIVE : self::PUBLIC_KEY_SANDBOX),
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Set public api key
     *
     * @param string $public_key
     * @param int $storeId
     * @return mixed
     */
    public function savePublicApiKey($public_key, $storeId)
    {
        $this->configInterface->saveConfig(
            self::CONFIG_CODE . ($this->isLiveMode($storeId) ? self::PUBLIC_KEY_LIVE : self::PUBLIC_KEY_SANDBOX),
            (string)$public_key,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
        $this->cacheTypeList->cleanType(\Magento\Framework\App\Cache\Type\Config::TYPE_IDENTIFIER);
    }

    /**
     * Get api url
     *
     * @param int $storeId
     * @return string
     */
    public function getApiUrl($storeId = 0)
    {
        if ($this->isLiveMode($storeId)) {
            return ConstantValue::URL_PROD;
        }
        return ConstantValue::URL_SANDBOX;
    }
    
    /**
     * Get isCardholderNameFieldActive
     *
     * @param int $storeId
     * @return bool
     */
    public function isCardholderNameFieldActive($storeId)
    {
        return (bool) $this->getValue(ConstantValue::IS_CARDHOLDER_NAME_FIELD_ACTIVE, $storeId);
    }
}
