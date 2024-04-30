<?php

namespace Revolut\Payment\Gateway\Response;

use Magento\Payment\Gateway\Response\HandlerInterface;
use Magento\Sales\Api\Data\OrderPaymentInterface;
use Revolut\Payment\Gateway\SubjectReader;
use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Model\RevolutOrder;
use Magento\Payment\Model\InfoInterface;

class PaymentDetailsHandler implements HandlerInterface
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
     * @inheritdoc
     */
    public function handle(array $handlingSubject, array $response)
    {
        $paymentDO = $this->subjectReader->readPayment($handlingSubject);
        $revolutOrder = $this->subjectReader->readRevolutOrder($response);
        $payment = $paymentDO->getPayment();

        if (!$revolutOrder->getRevolutOrderId()) {
            $revolutOrder = $revolutOrder->retrieveBy('public_id', $payment->getAdditionalInformation('publicId'));
        }
        
        $payment->setCcTransId($revolutOrder->getRevolutOrderId());
        $payment->setLastTransId($revolutOrder->getRevolutOrderId());
        $payment->setAdditionalInformation('Revolut Order Id', $revolutOrder->getRevolutOrderId());
        $payment->setTransactionId($revolutOrder->getRevolutOrderId());
        $this->setCardDetails($revolutOrder, $payment);
        
        //save magento order
        $revolutOrder->updateMerchantOrderId($payment->getOrder()->getIncrementId());
        
        $this->logger->debug('PaymentDetailsHandler -> handle -> ' . $revolutOrder->getRevolutOrderId());
    }

    /**
     * Reads RevolutOrder from subject
     *
     * @param RevolutOrder $revolutOrder
     * @param InfoInterface $payment
     * @return void
     */
    public function setCardDetails($revolutOrder, $payment)
    {
        $this->logger->debug('CardDetailsHandler -> handle' .  $revolutOrder->getRevolutOrderId());

        $paymentData = [];

        if (!empty($revolutOrder->revolutOrder['payments'][0])) {
            $paymentData = $revolutOrder->revolutOrder['payments'][0];
        }

        if (empty($paymentData['payment_method']) ||
        !isset($paymentData['payment_method']['type']) ||
        $paymentData['payment_method']['type'] != 'CARD' ||
        empty($paymentData['payment_method']['card'])) {
            return;
        }

        $cardData = $paymentData['payment_method']['card'];

        $payment->setCcLast4($cardData['card_last_four']);
        $payment->setCcExpMonth($cardData['card_expiry']);
        $payment->setCcExpYear($cardData['card_expiry']);
        $payment->setCcType($cardData['card_brand']);

        // set card details to additional info
        $payment->setAdditionalInformation('cc_number', 'xxxx-' . $cardData['card_last_four']);
        $payment->setAdditionalInformation(OrderPaymentInterface::CC_TYPE, $cardData['card_brand']);
    }
}
