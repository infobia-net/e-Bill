<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Revolut\Payment\Gateway\Validator;

use \Magento\Payment\Gateway\Validator\ResultInterface;
use Magento\Payment\Gateway\Validator\AbstractValidator;
use Magento\Payment\Gateway\Validator\ResultInterfaceFactory;

class CurrencyValidator extends AbstractValidator
{

    /**
     * @var array
     */
    private $currencies;

    /**
     * @param array $currencies
     * @param ResultInterfaceFactory $resultFactory
     */
    public function __construct(
        array $currencies,
        ResultInterfaceFactory $resultFactory
    ) {
        $this->currencies = $currencies;
        parent::__construct($resultFactory);
    }

    /**
     * Validate currency
     *
     * @param array $validationSubject
     * @return ResultInterface
     */
    public function validate(array $validationSubject)
    {
        if (!in_array('currency', array_keys($validationSubject))) {
            return $this->createResult(false);
        }

        $currencyCode = strtoupper($validationSubject['currency']);
        return $this->createResult(in_array($currencyCode, $this->currencies));
    }
}
