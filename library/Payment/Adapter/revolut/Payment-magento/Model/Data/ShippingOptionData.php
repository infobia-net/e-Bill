<?php

namespace Revolut\Payment\Model\Data;

class ShippingOptionData extends \Magento\Framework\Api\AbstractExtensibleObject implements \Revolut\Payment\Api\Data\ShippingOptionDataInterface
{
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
        return $this->setData(self::KEY_ID, $id);
    }

    /**
     * @return string|mixed
     */
    public function getLabel()
    {
        return $this->_get(self::KEY_LABEL);
    }
    
    /**
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        return $this->setData(self::KEY_LABEL, $label);
    }

    /**
     * @return string|mixed
     */
    public function getDetail()
    {
        return $this->_get(self::KEY_DETAIL);
    }
    
    /**
     * @param string $detail
     * @return $this
     */
    public function setDetail($detail)
    {
        return $this->setData(self::KEY_DETAIL, $detail);
    }
    
    /**
     * @return int|mixed
     */
    public function getAmount()
    {
        return $this->_get(self::KEY_AMOUNT);
    }
    
    /**
     * @param string $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        return $this->setData(self::KEY_AMOUNT, $amount);
    }
}
