<?php

namespace Revolut\Payment\Gateway\Http\Client;

class RevolutOrderRetrieveClient extends AbstractClient
{
    /**
     * @inheritdoc
     */
    protected function process($data)
    {
        return $this->adapter->retrieve($data);
    }
}
