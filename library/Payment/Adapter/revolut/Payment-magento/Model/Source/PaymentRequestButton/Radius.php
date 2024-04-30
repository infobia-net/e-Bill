<?php

namespace Revolut\Payment\Model\Source\PaymentRequestButton;

use Magento\Framework\Option\ArrayInterface;

class Radius implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'none',
                'label' => __('None')
            ],[
                'value' => 'small',
                'label' => __('Small')
            ],[
                'value' => 'large',
                'label' => __('Large')
            ]
        ];
    }
}
