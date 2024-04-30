<?php

namespace Revolut\Payment\Model\Source\PaymentRequestButton;

use Magento\Framework\Option\ArrayInterface;

class Theme implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'dark',
                'label' => __('Dark')
            ],[
                'value' => 'light',
                'label' => __('Light')
            ],[
                'value' => 'light-outlined',
                'label' => __('Light Outlined')
            ]
        ];
    }
}
