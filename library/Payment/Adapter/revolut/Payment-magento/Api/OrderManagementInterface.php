<?php

namespace Revolut\Payment\Api;

use Magento\Quote\Api\Data\PaymentInterface;
use Revolut\Payment\Api\Data\OrderManagementResponseDataInterface;

interface OrderManagementInterface
{
    /**
     * Create Order
     *
     * @api
     * @param bool $fastCheckout
     * @param bool $revolutPayFastCheckout
     * @return OrderManagementResponseDataInterface
     */
    public function create($fastCheckout = false, $revolutPayFastCheckout = false);

    /**
     * Cancel Order
     *
     * @api
     * @param String $publicId
     * @param String $cancelReason
     * @return OrderManagementResponseDataInterface
     */
    public function cancel(String $publicId, String $cancelReason);
    
    /**
     * Handle webhook callbacks
     *
     * @api
     * @param String $orderId
     * @param String $event
     * @return string[]
     */
    public function webhook(String $orderId, String $event);
    
    /**
     * Create Magento order
     *
     * @api
     * @param PaymentInterface $paymentMethod
     * @return OrderManagementResponseDataInterface
     */
    public function placeOrder(PaymentInterface $paymentMethod);
}
