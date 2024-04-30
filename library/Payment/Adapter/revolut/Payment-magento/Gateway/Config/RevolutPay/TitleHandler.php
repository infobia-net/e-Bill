<?php

namespace Revolut\Payment\Gateway\Config\RevolutPay;

use Magento\Payment\Gateway\Config\ValueHandlerInterface;

class TitleHandler implements ValueHandlerInterface
{
    /**
     * Retrieve method configured value
     *
     * @param array $subject
     * @param int|null $storeId
     *
     * @return mixed
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function handle(array $subject, $storeId = null)
    {
        return Config::TITLE;
    }
}
