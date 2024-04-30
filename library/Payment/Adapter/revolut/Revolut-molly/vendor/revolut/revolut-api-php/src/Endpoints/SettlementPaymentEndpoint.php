<?php

namespace Revolut\Api\Endpoints;

use Revolut\Api\Resources\Payment;
use Revolut\Api\Resources\PaymentCollection;

class SettlementPaymentEndpoint extends CollectionEndpointAbstract
{
    protected $resourcePath = "settlements_payments";

    /**
     * @inheritDoc
     */
    protected function getResourceObject()
    {
        return new Payment($this->client);
    }

    /**
     * @inheritDoc
     */
    protected function getResourceCollectionObject($count, $_links)
    {
        return new PaymentCollection($this->client, $count, $_links);
    }

    /**
     * Retrieves a collection of Payments from Revolut.
     *
     * @param string $settlementId
     * @param string $from The first payment ID you want to include in your list.
     * @param int $limit
     * @param array $parameters
     *
     * @return mixed
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function pageForId($settlementId, $from = null, $limit = null, array $parameters = [])
    {
        $this->parentId = $settlementId;

        return $this->rest_list($from, $limit, $parameters);
    }
}
