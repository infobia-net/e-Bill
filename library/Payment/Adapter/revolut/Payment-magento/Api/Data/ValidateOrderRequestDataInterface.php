<?php

namespace Revolut\Payment\Api\Data;

/**
 * Interface ValidateOrderRequestDataInterface
 * @api
 */
interface ValidateOrderRequestDataInterface
{

    public const KEY_ID = 'id';

    public const KEY_EMAIL = 'email';

    public const KEY_SHIPPING_ADDRESS = 'shipping_address';
   
    public const KEY_BILLING_ADDRESS = 'billing_address';
    
    /**
     * @return string
     */
    public function getEmail();
    
    /**
     * @param String|mixed $email
     * @return $this
     */
    public function setEmail($email);
    
    /**
     * @return string
     */
    public function getId();
    
    /**
     * @param String|mixed $id
     * @return $this
     */
    public function setId($id);
    
    /**
     * @return \Revolut\Payment\Model\Data\AddressData
     */
    public function getShippingAddress();
    
    /**
     * @param \Revolut\Payment\Model\Data\AddressData|mixed $address
     * @return $this
     */
    public function setShippingAddress($address);
    
    /**
     * @return \Revolut\Payment\Model\Data\AddressData
     */
    public function getBillingAddress();
    
    /**
     * @param \Revolut\Payment\Model\Data\AddressData|mixed $address
     * @return $this
     */
    public function setBillingAddress($address);
}
