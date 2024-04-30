<?php

namespace Revolut\Payment\Api\Data;

/**
 * Interface ShippingOptionDataInterface
 * @api
 */
interface ShippingOptionDataInterface
{
    public const KEY_ID = 'id';
    
    public const KEY_LABEL = 'label';
    
    public const KEY_DETAIL = 'detail';

    public const KEY_AMOUNT = 'amount';

    /**
     * @return string
     */
    public function getId();
    
    /**
     * @param string|mixed $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getLabel();
    
    /**
     * @param string|mixed $label
     * @return $this
     */
    public function setLabel($label);

    /**
     * @return string
     */
    public function getDetail();
    
    /**
     * @param string|mixed $detail
     * @return $this
     */
    public function setDetail($detail);
    
    /**
     * @return int
     */
    public function getAmount();
    
    /**
     * @param string|mixed $amount
     * @return $this
     */
    public function setAmount($amount);
}
