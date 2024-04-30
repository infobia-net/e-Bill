<?php

namespace Revolut\Payment\Gateway\Request;

use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Gateway\SubjectReader;
use Magento\Payment\Gateway\Request\BuilderInterface;

class RevolutOrderCaptureDataBuilder implements BuilderInterface
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
    public function build(array $buildSubject)
    {
        $paymentDO = $this->subjectReader->readPayment($buildSubject);
        $payment = $paymentDO->getPayment();
        $order = $paymentDO->getOrder();
        $currency = $order->getCurrencyCode();
        $amount = $this->subjectReader->readAmount($buildSubject);

        $this->logger->debug('RevolutOrderCaptureDataBuilder amount: ' . $amount . ' currency: ' . $currency);
        
        return [
            'publicId' => $payment->getAdditionalInformation('publicId'),
            'amount' => $amount,
            'currency' => $currency
        ];
    }
}
