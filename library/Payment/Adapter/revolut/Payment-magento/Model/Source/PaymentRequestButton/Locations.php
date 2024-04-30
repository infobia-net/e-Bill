<?php

namespace Revolut\Payment\Model\Source\PaymentRequestButton;

use Magento\Framework\Option\ArrayInterface;

class Locations implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'checkout',
                'label' => __('Checkout')
            ],[
                'value' => 'product',
                'label' => __('Product')
            ],[
                'value' => 'cart',
                'label' => __('Cart')
            ]
        ];
    }
}
