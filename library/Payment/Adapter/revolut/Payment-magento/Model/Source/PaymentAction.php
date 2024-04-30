<?php

namespace Revolut\Payment\Model\Source;

use Magento\Framework\Option\ArrayInterface;
use Magento\Payment\Model\MethodInterface;

class PaymentAction implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => MethodInterface::ACTION_AUTHORIZE_CAPTURE,
                'label' => __('Authorize and Capture')
            ],            [
                'value' => MethodInterface::ACTION_AUTHORIZE,
                'label' => __('Authorize'),
            ]
        ];
    }
}
