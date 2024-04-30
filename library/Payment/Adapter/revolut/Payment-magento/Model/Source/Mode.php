<?php

namespace Revolut\Payment\Model\Source;

class Mode
{
    public const PRODUCTION_MODE = 0;
    public const SANDBOX_MODE = 1;

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => self::SANDBOX_MODE,
                'label' => __('Sandbox')
            ],
            [
                'value' => self::PRODUCTION_MODE,
                'label' => __('Live'),
            ]
        ];
    }
}
