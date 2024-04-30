<?php

namespace Revolut\Payment\Gateway\Response;

use Magento\Payment\Gateway\Response\HandlerInterface;
use Revolut\Payment\Model\Helper\ConstantValue;
use Magento\Sales\Model\Order\Payment;
use Revolut\Payment\Gateway\SubjectReader;

class AuthorizationResultHandler implements HandlerInterface
{
    /**
     * @var SubjectReader
     */
    private $subjectReader;

    /**
     * @param SubjectReader $subjectReader
     */
    public function __construct(
        SubjectReader $subjectReader
    ) {
        $this->subjectReader = $subjectReader;
    }

    /**
     * @param array $handlingSubject
     * @param array $response
     * @return void
     */
    public function handle(array $handlingSubject, array $response)
    {
        $paymentDO = $this->subjectReader->readPayment($handlingSubject);
        $payment = $paymentDO->getPayment();
        $payment->setIsTransactionPending(false);
        $payment->setIsTransactionClosed(false);
        $payment->setShouldCloseParentTransaction(false);
        $payment->setAdditionalInformation(ConstantValue::WEBHOOK_ACTION, ConstantValue::WEBHOOK_ACTION_CAPTURE_PAYMENT);
    }
}
