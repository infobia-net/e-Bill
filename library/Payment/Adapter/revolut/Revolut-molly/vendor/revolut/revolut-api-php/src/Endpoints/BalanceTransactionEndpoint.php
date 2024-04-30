<?php

declare(strict_types=1);

namespace Revolut\Api\Endpoints;

use Revolut\Api\Resources\Balance;
use Revolut\Api\Resources\BalanceTransaction;
use Revolut\Api\Resources\BalanceTransactionCollection;

class BalanceTransactionEndpoint extends CollectionEndpointAbstract
{
    /**
     * @var string
     */
    const RESOURCE_ID_PREFIX = 'baltr_';

    /**
     * @var string
     */
    protected $resourcePath = "balances_transactions";

    /**
     * @inheritDoc
     */
    protected function getResourceCollectionObject($count, $_links)
    {
        return new BalanceTransactionCollection($this->client, $count, $_links);
    }

    /**
     * @inheritDoc
     */
    protected function getResourceObject()
    {
        return new BalanceTransaction($this->client);
    }

    /**
     * List the transactions for a specific Balance.
     *
     * @param Balance $balance
     * @param array $parameters
     * @return BalanceTransactionCollection|\Revolut\Api\Resources\BaseCollection
     *
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function listFor(Balance $balance, array $parameters = [])
    {
        return $this->listForId($balance->id, $parameters);
    }

    /**
     * List the transactions for a specific Balance ID.
     *
     * @param string $balanceId
     * @param array $parameters
     * @return BalanceTransactionCollection|\Revolut\Api\Resources\BaseCollection
     *
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function listForId(string $balanceId, array $parameters = [])
    {
        $this->parentId = $balanceId;

        return parent::rest_list(null, null, $parameters);
    }

    /**
     * List the transactions for the primary Balance.
     *
     * @param array $parameters
     * @return BalanceTransactionCollection|\Revolut\Api\Resources\BaseCollection
     *
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    public function listForPrimary(array $parameters = [])
    {
        $this->parentId = "primary";

        return parent::rest_list(null, null, $parameters);
    }
}
