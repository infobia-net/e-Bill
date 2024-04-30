<?php

namespace Revolut\Payment\Gateway;

use Magento\Quote\Model\Quote;
use Magento\Payment\Gateway\Helper;
use Revolut\Payment\Model\RevolutOrder;
use Magento\Vault\Api\Data\PaymentTokenInterface;
use Magento\Payment\Gateway\Data\PaymentDataObjectInterface;

/**
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
class SubjectReader
{
    /**
     * Reads response object from subject
     *
     * @param array $subject
     * @return object
     */
    public function readResponseObject(array $subject)
    {
        $response = Helper\SubjectReader::readResponse($subject);
        if (!isset($response['object']) || !is_object($response['object'])) {
            throw new \InvalidArgumentException('Response object does not exist');
        }

        return $response['object'];
    }

    /**
     * Reads RevolutOrder from subject
     *
     * @param array $subject
     * @return RevolutOrder
     */
    public function readRevolutOrder(array $subject)
    {
        if (!isset($subject['object']) || !$subject['object'] instanceof RevolutOrder) {
            throw new \InvalidArgumentException('The parsed object is not a RevolutOrder model');
        }

        return $subject['object'];
    }

    /**
     * Reads payment from subject
     *
     * @param array $subject
     * @return PaymentDataObjectInterface
     */
    public function readPayment(array $subject)
    {
        return Helper\SubjectReader::readPayment($subject);
    }

    /**
     * Reads amount from subject
     *
     * @param array $subject
     * @return mixed
     */
    public function readAmount(array $subject)
    {
        return Helper\SubjectReader::readAmount($subject);
    }
}
