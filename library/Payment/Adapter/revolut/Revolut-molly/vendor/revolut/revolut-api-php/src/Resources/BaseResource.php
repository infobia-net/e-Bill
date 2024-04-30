<?php

namespace Revolut\Api\Resources;

use Revolut\Api\RevolutApiClient;

#[\AllowDynamicProperties]
abstract class BaseResource
{
    /**
     * @var RevolutApiClient
     */
    protected $client;

    /**
     * Indicates the type of resource.
     *
     * @example payment
     *
     * @var string
     */
    public $resource;

    /**
     * @param RevolutApiClient $client
     */
    public function __construct(RevolutApiClient $client)
    {
        $this->client = $client;
    }
}
