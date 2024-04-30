<?php

namespace Revolut\Payment\Model\Data;

class TotalsData extends \Magento\Framework\Api\AbstractExtensibleObject implements \Revolut\Payment\Api\Data\TotalsDataInterface
{
    /**
     * @return int|mixed
     */
    public function getAmount()
    {
        return $this->_get(self::KEY_AMOUNT);
    }
    
    /**
     * @param int $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        return $this->setData(self::KEY_AMOUNT, $amount);
    }
}
