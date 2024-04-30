<?php

namespace Revolut\Payment\Gateway\Http\Client;

class RevolutOrderVoidClient extends AbstractClient
{
    /**
     * @inheritdoc
     */
    protected function process(array $data)
    {
        return $this->adapter->cancel($data);
    }
}
