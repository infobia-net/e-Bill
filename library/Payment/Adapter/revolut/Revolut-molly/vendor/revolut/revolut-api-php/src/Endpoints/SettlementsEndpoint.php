<?php

namespace Revolut\Api\Endpoints;

use Revolut\Api\Exceptions\ApiException;
use Revolut\Api\Resources\Settlement;
use Revolut\Api\Resources\SettlementCollection;

class SettlementsEndpoint extends CollectionEndpointAbstract
{
    protected $resourcePath = "settlements";

    /**
     * Get the object that is used by this API. Every API uses one type of object.
     *
     * @return \Revolut\Api\Resources\BaseResource
     */
    protected function getResourceObject()
    {
        return new Settlement($this->client);
    }

    /**
     * Get the collection object that is used by this API. Every API uses one type of collection object.
     *
     * @param int $count
     * @param \stdClass $_links
     *
     * @return \Revolut\Api\Resources\BaseCollection
     */
    protected function getResourceCollectionObject($count, $_links)
    {
        return new SettlementCollection($this->client, $count, $_links);
    }

    /**
     * Retrieve a single settlement from Revolut.
     *
     * Will throw a ApiException if the settlement id is invalid or the resource cannot be found.
     *
     * @param string $settlementId
     * @param array $parameters
     * @return Settlement
     * @throws ApiException
     */
    public function get($settlementId, array $parameters = [])
    {
        return parent::rest_read($settlementId, $parameters);
    }

    /**
     * Retrieve the details of the current settlement that has not yet been paid out.
     *
     * @return Settlement
     * @throws ApiException
     */
    public function next()
    {
        return parent::rest_read("next", []);
    }

    /**
     * Retrieve the details of the open balance of the organization.
     *
     * @return Settlement
     * @throws ApiException
     */
    public function open()
    {
        return parent::rest_read("open", []);
    }

    /**
     * Retrieves a collection of Settlements from Revolut.
     *
     * @param string $from The first settlement ID you want to include in your list.
     * @param int $limit
     * @param array $parameters
     *
     * @return SettlementCollection
     * @throws ApiException
     */
    public function page($from = null, $limit = null, array $parameters = [])
    {
        return $this->rest_list($from, $limit, $parameters);
    }
}
