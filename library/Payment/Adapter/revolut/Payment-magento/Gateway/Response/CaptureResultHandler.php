<?php

namespace Revolut\Payment\Gateway\Response;

use Magento\Payment\Gateway\Response\HandlerInterface;
use Magento\Sales\Model\Order\Payment;
use Revolut\Payment\Gateway\SubjectReader;
use Revolut\Payment\Model\Helper\ConstantValue;
use Revolut\Payment\Model\Helper\Logger;

class CaptureResultHandler implements HandlerInterface
{
    /**
     * @var SubjectReader
     */
    private $subjectReader;
    
    /**
     * @var Logger
     */
    private $logger;

    /**
     * @param Logger $logger
     * @param SubjectReader $subjectReader
     */
    public function __construct(
        Logger $logger,
        SubjectReader $subjectReader
    ) {
        $this->subjectReader = $subjectReader;
        $this->logger = $logger;
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
        
        $revolutOrder = $this->subjectReader->readRevolutOrder($response);
        $this->logger->debug('Start CaptureResultHandler handle orderId: '  . $revolutOrder->getRevolutOrderId());

        if (is_array($revolutOrder->revolutOrder) && in_array('errorId', array_keys($revolutOrder->revolutOrder))) {
            $this->logger->debug('capture error: '  . \json_encode($revolutOrder->revolutOrder));
            throw new \Exception('An error occured during capture action, errorId: ' . $revolutOrder->revolutOrder['errorId']);
        }

        if (!$revolutOrder->getRevolutOrderId()) {
            $revolutOrder = $revolutOrder->retrieveBy('public_id', $payment->getAdditionalInformation('publicId'));
        }

        if ($payment instanceof Payment) {
            $isPaymentCompleted = $revolutOrder->isPaymentCompleted();
            $isPendingPayment = !$isPaymentCompleted;
            $this->logger->debug('CaptureResultHandler isPaymentCompleted: ' . $isPaymentCompleted . ' ' . $revolutOrder->revolutOrder['state']);
            
            $payment->setAdditionalInformation(ConstantValue::WEBHOOK_ACTION, $isPendingPayment ? ConstantValue::WEBHOOK_ACTION_ACCEPT_PAYMENT : ConstantValue::WEBHOOK_ACTION_PAYMENT_COMPLETED);
            $payment->setIsTransactionPending($isPendingPayment);
            $payment->setIsTransactionClosed($isPaymentCompleted);
            $payment->setShouldCloseParentTransaction($isPaymentCompleted);
        }
    }
}
