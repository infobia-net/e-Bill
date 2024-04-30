<?php

namespace Revolut\Api\Endpoints;

use Revolut\Api\Resources\Chargeback;
use Revolut\Api\Resources\ChargebackCollection;
use Revolut\Api\Resources\Payment;

class PaymentChargebackEndpoint extends CollectionEndpointAbstract
{
    protected $resourcePath = "payments_chargebacks";

    /**
     * Get the object that is used by this API endpoint. Every API endpoint uses one type of object.
     *
     * @return Chargeback
     */
    protected function getResourceObject()
    {
        return new Chargeback($this->client);
    }

    /**
     * Get the collection object that is used by this API endpoint. Every API endpoint uses one type of collection object.
     *
     * @param int $count
     * @param \stdClass $_links
     *
     * @return ChargebackCollection
     */
    protected function getResourceCollectionObject($count, $_links)
    {
        return new ChargebackCollection($this->client, $count, $_links);
    }

    /**
     * @param Payment $payment
     * @param string $chargebackId
     * @param array $parameters
     *
     * @return Chargeback
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function getFor(Payment $payment, $chargebackId, array $parameters = [])
    {
        return $this->getForId($payment->id, $chargebackId, $parameters);
    }

    /**
     * @param string $paymentId
     * @param string $chargebackId
     * @param array $parameters
     *
     * @return Chargeback
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function getForId($paymentId, $chargebackId, array $parameters = [])
    {
        $this->parentId = $paymentId;

        return parent::rest_read($chargebackId, $parameters);
    }

    /**
     * @param Payment $payment
     * @param array $parameters
     *
     * @return Chargeback
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function listFor(Payment $payment, array $parameters = [])
    {
        return $this->listForId($payment->id, $parameters);
    }

    /**
     * @param string $paymentId
     * @param array $parameters
     *
     * @return \Revolut\Api\Resources\BaseCollection|\Revolut\Api\Resources\Chargeback
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function listForId($paymentId, array $parameters = [])
    {
        $this->parentId = $paymentId;

        return parent::rest_list(null, null, $parameters);
    }
}
