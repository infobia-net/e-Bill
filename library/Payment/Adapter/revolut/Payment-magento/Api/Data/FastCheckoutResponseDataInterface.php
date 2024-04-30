<?php

namespace Revolut\Payment\Api\Data;

/**
 * Interface FastCheckoutResponseDataInterface
 * @api
 */
interface FastCheckoutResponseDataInterface
{

    public const KEY_SUCCESS = 'success';

    public const KEY_VALID = 'valid';
   
    public const KEY_CURRENCY = 'currency';

    public const KEY_MESSAGE = 'message';
    
    public const KEY_SHIPPING_OPTIONS = 'delivery_methods';
    
    public const KEY_TOTAL = 'total';
    
    /**
     * @return bool
     */
    public function getSuccess();
    
    /**
     * @param bool|mixed $success
     * @return $this
     */
    public function setSuccess($success);
    
    /**
     * @return bool
     */
    public function getValid();
    
    /**
     * @return bool
     */
    public function getCurrency();
    
    /**
     * @param string|mixed $currency
     * @return $this
     */
    public function setCurrency($currency);
    
    /**
     * @return string
     */
    public function getMessage();
    
    /**
     * @param string|mixed $message
     * @return $this
     */
    public function setMessage($message);

    /**
     * @return \Revolut\Payment\Model\Data\ShippingOptionData[]
     */
    public function getDeliveryMethods();
    
    /**
     * @param \Revolut\Payment\Model\Data\ShippingOptionData[]|mixed $shippingOptions
     * @return $this
     */
    public function setDeliveryMethods($shippingOptions);
    
    /**
     * @return \Revolut\Payment\Api\Data\TotalsDataInterface
     */
    public function getTotal();
    
    /**
     * @param \Revolut\Payment\Api\Data\TotalsDataInterface|mixed $total
     * @return $this
     */
    public function setTotal($total);
}
