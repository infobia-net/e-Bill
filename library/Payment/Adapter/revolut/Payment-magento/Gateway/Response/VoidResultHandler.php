<?php

namespace Revolut\Payment\Gateway\Response;

use Exception;
use Magento\Payment\Gateway\Response\HandlerInterface;
use Magento\Sales\Model\Order\Payment;
use Revolut\Payment\Gateway\SubjectReader;
use Revolut\Payment\Model\Helper\Logger;

class VoidResultHandler implements HandlerInterface
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
        $this->logger = $logger;
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
        $revolutOrder = $this->subjectReader->readRevolutOrder($response);
        /** @var Payment $payment */
        $payment = $paymentDO->getPayment();

        if (is_array($revolutOrder->revolutOrder) && in_array('errorId', array_keys($revolutOrder->revolutOrder))) {
            throw new \Exception('An error occured during cancel action, errorId: ' . $revolutOrder->revolutOrder['errorId']);
        }

        if (!$revolutOrder->getRevolutOrderId()) {
            $revolutOrder = $revolutOrder->retrieveBy('public_id', $payment->getAdditionalInformation('publicId'));
        }
        $this->logger->debug('VoidResultHandler handle orderId: ' . $revolutOrder->getRevolutOrderId() . ' ' . $revolutOrder->revolutOrder['state']);

        if (!($payment instanceof Payment)) {
            return;
        }

        $payment->setTransactionId($revolutOrder->getRevolutOrderId());
        $payment->setIsTransactionClosed($this->shouldCloseTransaction());
        $payment->setShouldCloseParentTransaction(
            $this->shouldCloseParentTransaction($payment)
        );
    }

    /**
     * Whether transaction should be closed
     *
     * @return bool
     */
    protected function shouldCloseTransaction()
    {
        return true;
    }

    /**
     * Whether parent transaction should be closed
     *
     * @param Payment $payment
     * @return bool
     */
    protected function shouldCloseParentTransaction(Payment $payment)
    {
        return true;
    }
}
