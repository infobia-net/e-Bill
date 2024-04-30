<?php

namespace Revolut\Payment\Gateway\Command;

use Magento\Payment\Gateway\CommandInterface;
use Revolut\Payment\Gateway\SubjectReader;

/**
 * @SuppressWarnings(PHPMD.StaticAccess)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class AcceptPaymentCommand implements CommandInterface
{
    /**
     * @var SubjectReader
     */
    private $subjectReader;

    /**
     * Constructor
     *
     * @param SubjectReader $subjectReader
     */
    public function __construct(
        SubjectReader $subjectReader
    ) {
        $this->subjectReader = $subjectReader;
    }

    /**
     * @inheritdoc
     */
    public function execute(array $commandSubject)
    {
        /** @var \Magento\Payment\Gateway\Data\PaymentDataObjectInterface $paymentDO */
        $paymentDO = $this->subjectReader->readPayment($commandSubject);
        $payment = $paymentDO->getPayment();
        $payment->setIsTransactionPending(false);
        $payment->setIsTransactionClosed(true);
        $payment->setShouldCloseParentTransaction(true);
        return null;
    }
}
