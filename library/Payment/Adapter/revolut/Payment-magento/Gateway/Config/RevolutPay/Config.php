<?php

namespace Revolut\Payment\Gateway\Config\RevolutPay;

use Magento\Framework\Encryption\Encryptor;
use Revolut\Payment\Model\Source\Mode;
use Revolut\Payment\Model\Helper\ConstantValue;
use Magento\Payment\Model\MethodInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Config\Model\ResourceModel\Config as ConfigInterface;

class Config extends \Magento\Payment\Gateway\Config\Config
{
    public const TITLE = 'Revolut Pay';
    
    public const IS_ACTIVE = 'active';

    public const WEBHOOK_SETUP = 'webhook_setup';

    /**
     * @var Encryptor
     */
    protected $encryptor;

    /**
     * @var ConfigInterface
     */
    protected $configInterface;

    /**
     * @var TypeListInterface
     */
    protected $cacheTypeList;

    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param Encryptor $encryptor
     * @param ConfigInterface $configInterface
     * @param TypeListInterface $cacheTypeList
     * @param string|null $methodCode
     * @param string $pathPattern
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Encryptor $encryptor,
        ConfigInterface $configInterface,
        TypeListInterface $cacheTypeList,
        $methodCode = null,
        $pathPattern = self::DEFAULT_PATH_PATTERN
    ) {
        parent::__construct($scopeConfig, $methodCode, $pathPattern);
        
        $this->encryptor = $encryptor;
        $this->configInterface = $configInterface;
        $this->cacheTypeList = $cacheTypeList;
    }

    /**
     * Check if gateway enabled
     *
     * @param int $storeId
     * @return bool
     */
    public function isActive($storeId)
    {
        return (bool) $this->getValue(self::IS_ACTIVE, $storeId);
    }
    
    /**
     * Get Webhook Setup Result
     *
     * @param int $storeId
     * @return mixed
     */
    public function getWebhookSetupResult($storeId)
    {
        return $this->getValue(self::WEBHOOK_SETUP, $storeId);
    }

    /**
     * @param int $storeId
     * @return array
     */
    public function getThemeConfigs($storeId = 0)
    {
        $size = $this->getValue('size', $storeId);
        $action = $this->getValue('action', $storeId);
        $variant = $this->getValue('variant', $storeId);
        $radius = $this->getValue('radius', $storeId);

         return [
            'size' => !empty($size) ?  $size  : 'large',
            'action' => !empty($action) ?  $action  : 'buy',
            'variant' => !empty($variant) ?  $variant  : 'dark',
            'radius' => !empty($radius) ?  $radius  : 'none',
         ];
    }
    
    /**
     * @param int $storeId
     * @return array
     */
    public function getLocations($storeId = 0)
    {
        $locations = $this->getValue('locations', $storeId);

        if ($locations) {
            return explode(',', $locations); // @phpstan-ignore-line
        }

        return [];
    }
    
    /**
     * @param int $storeId
     * @return bool
     */
    public function isCheckoutPageActivated($storeId = 0)
    {
        return $this->isActiveLocation('checkout', $storeId);
    }
    
    /**
     * @param string $location
     * @param int $storeId
     * @return bool
     */
    public function isActiveLocation($location, $storeId = 0)
    {
        return in_array($location, $this->getLocations($storeId)) && $this->isActive($storeId);
    }
    
    /**
     * @param int $storeId
     * @return array
     */
    public function getRevolutPayButtonStyleConfigs($storeId = 0)
    {
        $cashback = (bool) $this->getValue('enable_cashback_text', $storeId);

         return [
            'cashback' => $cashback,
         ];
    }
}
