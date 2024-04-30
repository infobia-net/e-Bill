<?php

namespace Revolut\Payment\Gateway\Config\RevolutPaymentRequest;

use Revolut\Payment\Gateway\Config\Config;
use Magento\Payment\Gateway\Config\ValueHandlerInterface;

class PaymentActionHandler implements ValueHandlerInterface
{

    /**
     * @var Config
     */
    protected $config;

    /**
     * @param Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

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
        return $this->config->getPaymentAction($storeId);
    }
}
