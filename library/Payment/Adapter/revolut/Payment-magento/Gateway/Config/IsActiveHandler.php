<?php

namespace Revolut\Payment\Gateway\Config;

use Magento\Payment\Gateway\Config\ValueHandlerInterface;
use Magento\Payment\Gateway\Config\Config as PaymentConfig;

class IsActiveHandler implements ValueHandlerInterface
{
    /**
     * @var Config
     */
    private $revolutConfig;
    
    /**
     * @var PaymentConfig
     */
    private $configInterface;

    /**
     * IsActiveHandler constructor.
     *
     * @param Config $revolutConfig
     * @param PaymentConfig $configInterface
     */
    public function __construct(
        Config $revolutConfig,
        PaymentConfig $configInterface
    ) {
        $this->revolutConfig = $revolutConfig;
        $this->configInterface = $configInterface;
    }

    /**
     * Retrieve method configured value
     *
     * @param array $subject
     * @param int $storeId
     *
     * @return mixed
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function handle(array $subject, $storeId = 0)
    {
        return $this->configInterface->isActive($storeId) && $this->revolutConfig->getWebhookSetupResult($storeId);
    }
}
