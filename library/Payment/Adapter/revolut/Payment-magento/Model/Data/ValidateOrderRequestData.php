<?php

namespace Revolut\Payment\Model\Data;

class ValidateOrderRequestData extends \Magento\Framework\Api\AbstractExtensibleObject implements \Revolut\Payment\Api\Data\ValidateOrderRequestDataInterface
{
    /**
     * @return string|mixed
     */
    public function getEmail()
    {
        return $this->_get(self::KEY_EMAIL);
    }
    
    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->setData(self::KEY_EMAIL, $email);
        return $this;
    }

    /**
     * @return string|mixed
     */
    public function getId()
    {
        return $this->_get(self::KEY_ID);
    }
    
    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->setData(self::KEY_ID, $id);
        return $this;
    }

    /**
     * @return \Revolut\Payment\Model\Data\AddressData|mixed
     */
    public function getShippingAddress()
    {
        return $this->_get(self::KEY_SHIPPING_ADDRESS);
    }
    
    /**
     * @param \Revolut\Payment\Model\Data\AddressData $address
     * @return $this
     */
    public function setShippingAddress($address)
    {
        $this->setData(self::KEY_SHIPPING_ADDRESS, $address);
        return $this;
    }
    
    /**
     * @return \Revolut\Payment\Model\Data\AddressData|mixed
     */
    public function getBillingAddress()
    {
        return $this->_get(self::KEY_BILLING_ADDRESS);
    }
    
    /**
     * @param \Revolut\Payment\Model\Data\AddressData $address
     * @return $this
     */
    public function setBillingAddress($address)
    {
        $this->setData(self::KEY_BILLING_ADDRESS, $address);
        return $this;
    }
}
