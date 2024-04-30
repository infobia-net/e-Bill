<?php

namespace Revolut\Payment\Model\Data;

class FastCheckoutParametersResponseData extends \Magento\Framework\Api\AbstractExtensibleObject implements \Revolut\Payment\Api\Data\FastCheckoutParametersResponseDataInterface
{
    /**
     * @return bool|mixed
     */
    public function getIsRevolutPaymentRequestActiveLocation()
    {
        return $this->_get(self::KEY_IS_REVOLUT_PAYMENT_REQUEST_ACTIVE_LOCATION);
    }
    
    /**
     * @param bool $isActiveLocation
     * @return $this
     */
    public function setIsRevolutPaymentRequestActiveLocation($isActiveLocation)
    {
        $this->setData(self::KEY_IS_REVOLUT_PAYMENT_REQUEST_ACTIVE_LOCATION, $isActiveLocation);
        return $this;
    }
    
    /**
     * @return bool|mixed
     */
    public function getIsRevolutPayActiveLocation()
    {
        return $this->_get(self::KEY_IS_REVOLUT_PAY_ACTIVE_LOCATION);
    }
    
    /**
     * @param bool $isActiveLocation
     * @return $this
     */
    public function setIsRevolutPayActiveLocation($isActiveLocation)
    {
        $this->setData(self::KEY_IS_REVOLUT_PAY_ACTIVE_LOCATION, $isActiveLocation);
        return $this;
    }
    
    /**
     * @return string|mixed
     */
    public function getStoreCode()
    {
        return $this->_get(self::KEY_STORE_CODE);
    }
    
    /**
     * @param string $code
     * @return $this
     */
    public function setStoreCode($code)
    {
        $this->setData(self::KEY_STORE_CODE, $code);
        return $this;
    }
    
    /**
     * @return string|mixed
     */
    public function getRevolutPaymentRequestThemeConfigs()
    {
        return $this->_get(self::KEY_REVOLUT_PAYMENT_REQUEST_THEME_CONFIGS);
    }
    
    /**
     * @param string $themeConfigs
     * @return $this
     */
    public function setRevolutPaymentRequestThemeConfigs($themeConfigs)
    {
        $this->setData(self::KEY_REVOLUT_PAYMENT_REQUEST_THEME_CONFIGS, $themeConfigs);
        return $this;
    }
    
    /**
     * @return string|mixed
     */
    public function getRevolutPayThemeConfigs()
    {
        return $this->_get(self::KEY_REVOLUT_PAY_THEME_CONFIGS);
    }
    
    /**
     * @param string $themeConfigs
     * @return $this
     */
    public function setRevolutPayThemeConfigs($themeConfigs)
    {
        $this->setData(self::KEY_REVOLUT_PAY_THEME_CONFIGS, $themeConfigs);
        return $this;
    }

    /**
     * @return string|mixed
     */
    public function getMethodCode()
    {
        return $this->_get(self::KEY_METHOD_CODE);
    }
    
    /**
     * @param string $methodCode
     * @return $this
     */
    public function setMethodCode($methodCode)
    {
        $this->setData(self::KEY_METHOD_CODE, $methodCode);
        return $this;
    }
    
    /**
     * @return string|mixed
     */
    public function getRevolutSdk()
    {
        return $this->_get(self::KEY_REVOLUT_SDK);
    }
    
    /**
     * @param string $revolutSdk
     * @return $this
     */
    public function setRevolutSdk($revolutSdk)
    {
        $this->setData(self::KEY_REVOLUT_SDK, $revolutSdk);
        return $this;
    }
    
    /**
     * @return int|mixed
     */
    public function getProductId()
    {
        return $this->_get(self::KEY_PRODUCT_ID);
    }
    
    /**
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->setData(self::KEY_PRODUCT_ID, $productId);
        return $this;
    }
}
