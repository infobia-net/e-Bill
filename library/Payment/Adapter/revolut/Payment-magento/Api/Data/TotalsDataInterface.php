<?php

namespace Revolut\Payment\Api\Data;

/**
 * Interface TotalsDataInterface
 * @api
 */
interface TotalsDataInterface
{
    public const KEY_AMOUNT = 'amount';

    /**
     * @return int
     */
    public function getAmount();
    
    /**
     * @param int|mixed $amount
     * @return $this
     */
    public function setAmount($amount);
}
