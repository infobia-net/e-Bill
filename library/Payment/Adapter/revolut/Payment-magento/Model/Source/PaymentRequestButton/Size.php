<?php

namespace Revolut\Payment\Model\Source\PaymentRequestButton;

use Magento\Framework\Option\ArrayInterface;

class Size implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'large',
                'label' => __('Large')
            ], [
                'value' => 'small',
                'label' => __('Small')
            ]
        ];
    }
}
