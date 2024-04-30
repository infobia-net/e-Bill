<?php

namespace Revolut\Payment\Gateway\Http\Client;

class RevolutOrderCaptureClient extends AbstractClient
{
    /**
     * @inheritdoc
     */
    protected function process(array $data)
    {
        return $this->adapter->capture($data);
    }
}
