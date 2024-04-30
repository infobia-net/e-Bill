<?php

namespace Revolut\Api\Endpoints;

use Revolut\Api\Exceptions\ApiException;
use Revolut\Api\Resources\BaseResource;
use Revolut\Api\Resources\Onboarding;
use Revolut\Api\Resources\ResourceFactory;

class OnboardingEndpoint extends EndpointAbstract
{
    protected $resourcePath = "onboarding/me";

    protected function getResourceCollectionObject($count, $links)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * Get the object that is used by this API endpoint. Every API endpoint uses one type of object.
     *
     * @return BaseResource
     */
    protected function getResourceObject()
    {
        return new Onboarding($this->client);
    }

    /**
     * Retrieve the organization's onboarding status from Revolut.
     *
     * Will throw a ApiException if the resource cannot be found.
     *
     * @return Onboarding
     * @throws ApiException
     */
    public function get()
    {
        return $this->rest_read('', []);
    }

    /**
     * Submit data that will be prefilled in the merchant’s onboarding.
     * Please note that the data you submit will only be processed when the onboarding status is needs-data.
     *
     * Information that the merchant has entered in their dashboard will not be overwritten.
     *
     * Will throw a ApiException if the resource cannot be found.
     *
     * @throws ApiException
     */
    public function submit(array $parameters = [])
    {
        return $this->rest_create($parameters, []);
    }

    /**
     * @param string $id
     * @param array $filters
     *
     * @return mixed
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    protected function rest_read($id, array $filters)
    {
        $result = $this->client->performHttpCall(
            self::REST_READ,
            $this->getResourcePath() . $this->buildQueryString($filters)
        );

        return ResourceFactory::createFromApiResult($result, $this->getResourceObject());
    }

    /**
     * @param array $body
     * @param array $filters
     *
     * @return mixed
     * @throws \Revolut\Api\Exceptions\ApiException
     */
    protected function rest_create(array $body, array $filters)
    {
        $this->client->performHttpCall(
            self::REST_CREATE,
            $this->getResourcePath() . $this->buildQueryString($filters),
            $this->parseRequestBody($body)
        );
    }
}
