<?php

namespace Revolut\Payment\Gateway\Request;

use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Gateway\SubjectReader;
use Magento\Framework\Exception\LocalizedException;
use Magento\Payment\Gateway\Request\BuilderInterface;

class RevolutOrderRetrieveDataBuilder implements BuilderInterface
{

    /**
     * @var Logger
     */
    private $logger;

    /**
     * @var SubjectReader
     */
    private $subjectReader;

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
        $storeId = $order->getStoreId();
        $publicId = $payment->getAdditionalInformation('publicId');
        
        if (empty($publicId)) {
            $msg = 'Retrieve data builder: public id is missing';
            $this->logger->debug($msg);
            throw new LocalizedException(__($msg));
        }

        $this->logger->debug('RevolutOrderRetrieveDataBuilder publicId: ' . $publicId . ' storeId: ' . $storeId);

        return [
            'publicId' => $publicId,
            'storeId' => $storeId,
        ];
    }
}
