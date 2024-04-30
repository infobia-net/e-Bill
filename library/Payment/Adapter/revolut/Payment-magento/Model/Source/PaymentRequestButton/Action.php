<?php

namespace Revolut\Payment\Model\Source\PaymentRequestButton;

use Magento\Framework\Option\ArrayInterface;

class Action implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'buy',
                'label' => __('Buy')
            ],[
                'value' => 'donate',
                'label' => __('Donate')
            ],[
                'value' => 'pay',
                'label' => __('Pay')
            ]
        ];
    }
}
