<?php

namespace Revolut\Payment\Gateway\Http\Client;

class RevolutOrderRefundClient extends AbstractClient
{
    /**
     * @inheritdoc
     */
    protected function process(array $data)
    {
        return $this->adapter->refund($data);
    }
}
