<?php

namespace Revolut\Payment\Api\Data;

/**
 * Interface FastCheckoutParametersDataInterface
 * @api
 */
interface FastCheckoutParametersResponseDataInterface
{
    public const KEY_IS_REVOLUT_PAYMENT_REQUEST_ACTIVE_LOCATION = 'is_revolut_payment_request_active_location';

    public const KEY_IS_REVOLUT_PAY_ACTIVE_LOCATION = 'is_revolut_pay_active_location';

    public const KEY_STORE_CODE = 'store_code';

    public const KEY_REVOLUT_PAYMENT_REQUEST_THEME_CONFIGS = 'revolut_payment_request_theme_configs';

    public const KEY_REVOLUT_PAY_THEME_CONFIGS = 'revolut_pay_theme_configs';

    public const KEY_METHOD_CODE = 'method_code';

    public const KEY_REVOLUT_SDK = 'revolut_sdk';

    public const KEY_PRODUCT_ID = 'product_id';

    /**
     * @return bool
     */
    public function getIsRevolutPaymentRequestActiveLocation();
    
    /**
     * @param bool|mixed $isActiveLocation
     * @return $this
     */
    public function setIsRevolutPaymentRequestActiveLocation($isActiveLocation);
    
    /**
     * @return bool
     */
    public function getIsRevolutPayActiveLocation();
    
    /**
     * @param bool|mixed $isActiveLocation
     * @return $this
     */
    public function setIsRevolutPayActiveLocation($isActiveLocation);
    
    /**
     * @return string
     */
    public function getStoreCode();
    
    /**
     * @param string|mixed $code
     * @return $this
     */
    public function setStoreCode($code);
    
    /**
     * @return string
     */
    public function getRevolutPaymentRequestThemeConfigs();
    
    /**
     * @param string|mixed $themeConfigs
     * @return $this
     */
    public function setRevolutPaymentRequestThemeConfigs($themeConfigs);
    
    /**
     * @return string
     */
    public function getRevolutPayThemeConfigs();
    
    /**
     * @param string|mixed $themeConfigs
     * @return $this
     */
    public function setRevolutPayThemeConfigs($themeConfigs);

    /**
     * @return string
     */
    public function getMethodCode();
    
    /**
     * @param string|mixed $methodCode
     * @return $this
     */
    public function setMethodCode($methodCode);
    
    /**
     * @return string
     */
    public function getRevolutSdk();
    
    /**
     * @param string|mixed $revolutSdk
     * @return $this
     */
    public function setRevolutSdk($revolutSdk);
    
    /**
     * @return int
     */
    public function getProductId();
    
    /**
     * @param int|mixed $productId
     * @return $this
     */
    public function setProductId($productId);
}
