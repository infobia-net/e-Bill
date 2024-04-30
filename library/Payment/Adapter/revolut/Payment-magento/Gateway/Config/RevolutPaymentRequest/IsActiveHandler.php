<?php

namespace Revolut\Payment\Gateway\Config\RevolutPaymentRequest;

use Magento\Payment\Gateway\Config\ValueHandlerInterface;
use Revolut\Payment\Gateway\Config\Config as RevolutConfig;
use Revolut\Payment\Gateway\Config\RevolutPaymentRequest\Config as PaymentConfig;

class IsActiveHandler implements ValueHandlerInterface
{
    /**
     * @var RevolutConfig
     */
    private $revolutConfig;
    
    /**
     * @var PaymentConfig
     */
    private $configInterface;

    /**
     * IsActiveHandler constructor.
     *
     * @param RevolutConfig $revolutConfig
     * @param PaymentConfig $configInterface
     */
    public function __construct(
        RevolutConfig $revolutConfig,
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
        if (in_array('payment', array_keys($subject))) {
            return true;
        }

        return $this->configInterface->isActive($storeId) &&
        $this->configInterface->isCheckoutPageActivated($storeId) &&
        (bool) $this->revolutConfig->getWebhookSetupResult($storeId) &&
        (bool) $this->revolutConfig->isLiveMode($storeId);
    }
}
