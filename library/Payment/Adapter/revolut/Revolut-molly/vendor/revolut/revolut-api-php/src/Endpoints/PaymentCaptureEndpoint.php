<?php

namespace Revolut\Api\Endpoints;

use Revolut\Api\Resources\Capture;
use Revolut\Api\Resources\CaptureCollection;
use Revolut\Api\Resources\Payment;

class PaymentCaptureEndpoint extends CollectionEndpointAbstract
{
    protected $resourcePath = "payments_captures";

    /**
     * Get the object that is used by this API endpoint. Every API endpoint uses one type of object.
     *
     * @return Capture
     */
    protected function getResourceObject()
    {
        return new Capture($this->client);
    }

    /**
     * Get the collection object that is used by this API endpoint. Every API endpoint uses one type of collection object.
     *
     * @param int $count
     * @param \stdClass $_links
     *
     * @return \Revolut\Api\Resources\CaptureCollection
     */
    protected function getResourceCollectionObject($count, $_links)
    {
        return new CaptureCollection($this->client, $count, $_links);
    }

    /**
     * Creates a payment capture in Revolut.
     *
     * @param Payment $payment.
     * @param array $data An array containing details on the capture.
     * @param array $filters
     *
     * @return Capture
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function createFor(Payment $payment, array $data = [], array $filters = [])
    {
        return $this->createForId($payment->id, $data, $filters);
    }

    /**
     * Creates a payment capture in Revolut.
     *
     * @param string $paymentId The payment's ID.
     * @param array $data An array containing details on the capture.
     * @param array $filters
     *
     * @return Capture
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function createForId($paymentId, array $data = [], array $filters = [])
    {
        $this->parentId = $paymentId;

        return $this->rest_create($data, $filters);
    }

    /**
     * @param Payment $payment
     * @param string $captureId
     * @param array $parameters
     *
     * @return Capture
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function getFor(Payment $payment, $captureId, array $parameters = [])
    {
        return $this->getForId($payment->id, $captureId, $parameters);
    }

    /**
     * @param string $paymentId
     * @param string $captureId
     * @param array $parameters
     *
     * @return \Revolut\Api\Resources\Capture
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function getForId($paymentId, $captureId, array $parameters = [])
    {
        $this->parentId = $paymentId;

        return parent::rest_read($captureId, $parameters);
    }

    /**
     * @param Payment $payment
     * @param array $parameters
     *
     * @return Capture
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
     * @return \Revolut\Api\Resources\BaseCollection|\Revolut\Api\Resources\Capture
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function listForId($paymentId, array $parameters = [])
    {
        $this->parentId = $paymentId;

        return parent::rest_list(null, null, $parameters);
    }
}
