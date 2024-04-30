<?php

namespace Revolut\Payment\Gateway\Helper;

use Revolut\Payment\Model\Helper\Logger;
use Magento\Directory\Model\CurrencyFactory;

class AmountProvider
{
    /**
     * Zero decimal currencies
     *
     * @var array
     */
    private $zeroDecimal = ['JPY'];

    /**
     * @var Logger
     */
    public $logger;
    
    /**
     * @var CurrencyFactory
     */
    public $currencyFactory;

    /**
     * @param Logger $logger
     * @param CurrencyFactory $currencyFactory
     */
    public function __construct(
        Logger $logger,
        CurrencyFactory $currencyFactory
    ) {
        $this->logger = $logger;
        $this->currencyFactory = $currencyFactory;
    }
    
    /**
     * @param float|mixed $amount
     * @param string $orderCurrency
     * @param string|null $paymentCurrency
     * @param int|float $orderTotal
     * @param int|float $paymentTotal
     * @return mixed
     */
    public function convert($amount, $orderCurrency, $paymentCurrency = '', $orderTotal = 0, $paymentTotal = 0)
    {
        list($amount, $orderCurrency) = $this->checkCurrencyDifference($amount, $orderCurrency, $paymentCurrency, $orderTotal, $paymentTotal); // @phpstan-ignore-line
        $multiplier = in_array($orderCurrency, $this->zeroDecimal) ? 1 : 100;
        $amount = (int)round($multiplier * $amount);
        if (!empty($paymentCurrency)) {
            $this->logger->debug('converted amount : ' . $amount . ' - currency: ' . $orderCurrency);
            return [$amount, $orderCurrency];
        }
        $this->logger->debug('converted amount : ' . $amount);
        return $amount;
    }

    /**
     * @param float|mixed $amount
     * @param string $orderCurrency
     * @param string|null $paymentCurrency
     * @param int|float $orderTotal
     * @param int|float $paymentTotal
     *
     * @return mixed
     */
    public function checkCurrencyDifference($amount, $orderCurrency, $paymentCurrency, $orderTotal, $paymentTotal)
    {
        if (empty($paymentCurrency)) {
            return [$amount, $orderCurrency];
        }

        $this->logger->debug('Currency difference check - initialAmount: ' . $amount . ' - paymentCurrency: ' . $paymentCurrency . ' - orderCurrency: ' . $orderCurrency);

        if ($paymentCurrency != $orderCurrency) {
            $isTotalAmount = $amount == $orderTotal; //if amount is total amount, use total payment amount as converted amount
            if ($isTotalAmount) {
                $this->logger->debug('use total payment amount as converted: - amount - ' . $amount .  ' paymentTotal - ' . $paymentTotal . ' - paymentCurrency: ' . $paymentCurrency . ' - orderTotal: ' . $orderTotal . ' - orderCurrency: ' . $orderCurrency);
                return [$paymentTotal, $paymentCurrency];
            }

            $paymentCurrencyObj = $this->currencyFactory->create()->load($paymentCurrency);
            $orderCurrencyObj = $this->currencyFactory->create()->load($orderCurrency);

            $amount = $orderCurrencyObj->convert($amount, $paymentCurrencyObj);  // @phpstan-ignore-line
            $this->logger->debug('Currency difference check - convertedAmount: ' . $amount . ' - convertedCurrency: ' . $paymentCurrencyObj->getCode());
            return [$amount, $paymentCurrencyObj->getCode()];
        }

        $this->logger->debug('Currency difference check - convertedAmount: ' . $amount);

        return [$amount, $orderCurrency];
    }

     /**
      * Return reverted amount based on currency
      *
      * @param float $amount
      * @param string $currency
      *
      * @return float
      */
    public function revert($amount, $currency)
    {
        $multiplier = in_array($currency, $this->zeroDecimal) ? 1 : 100;

        return round($amount / $multiplier, 2);
    }
}
