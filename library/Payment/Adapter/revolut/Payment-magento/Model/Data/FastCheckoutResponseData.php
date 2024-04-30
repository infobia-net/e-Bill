<?php

namespace Revolut\Payment\Model\Data;

class FastCheckoutResponseData extends \Magento\Framework\Api\AbstractExtensibleObject implements \Revolut\Payment\Api\Data\FastCheckoutResponseDataInterface
{
    /**
     * @return bool|mixed
     */
    public function getSuccess()
    {
        return $this->_get(self::KEY_SUCCESS);
    }
    
    /**
     * @param bool $success
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->setData(self::KEY_SUCCESS, $success);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getValid()
    {
        return !empty($this->getDeliveryMethods());
    }

    /**
     * @return string|mixed
     */
    public function getCurrency()
    {
        return $this->_get(self::KEY_CURRENCY);
    }
    
    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->setData(self::KEY_CURRENCY, $currency);
        return $this;
    }

    /**
     * @return string|mixed
     */
    public function getMessage()
    {
        return $this->_get(self::KEY_MESSAGE);
    }
    
    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->setData(self::KEY_MESSAGE, $message);
        return $this;
    }

    /**
     * @return \Revolut\Payment\Model\Data\ShippingOptionData[]|mixed
     */
    public function getDeliveryMethods()
    {
        return $this->_get(self::KEY_SHIPPING_OPTIONS);
    }
    
    /**
     * @param \Revolut\Payment\Model\Data\ShippingOptionData[] $shippingOptions
     * @return $this
     */
    public function setDeliveryMethods($shippingOptions)
    {
        return $this->setData(self::KEY_SHIPPING_OPTIONS, $shippingOptions);
    }
    
    /**
     * @return \Revolut\Payment\Model\Data\TotalsData|mixed
     */
    public function getTotal()
    {
        return $this->_get(self::KEY_TOTAL);
    }
    
    /**
     * @param \Revolut\Payment\Model\Data\TotalsData $total
     * @return $this
     */
    public function setTotal($total)
    {
        return $this->setData(self::KEY_TOTAL, $total);
    }
}
