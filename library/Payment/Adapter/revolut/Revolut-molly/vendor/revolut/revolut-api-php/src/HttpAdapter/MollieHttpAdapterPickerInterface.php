<?php

namespace Revolut\Api\HttpAdapter;

interface RevolutHttpAdapterPickerInterface
{
    /**
     * @param \GuzzleHttp\ClientInterface|\Revolut\Api\HttpAdapter\RevolutHttpAdapterInterface $httpClient
     *
     * @return \Revolut\Api\HttpAdapter\RevolutHttpAdapterInterface
     */
    public function pickHttpAdapter($httpClient);
}
