<?php

namespace Revolut\Api\HttpAdapter;

use Revolut\Api\Exceptions\UnrecognizedClientException;

class RevolutHttpAdapterPicker implements RevolutHttpAdapterPickerInterface
{
    /**
     * @param \GuzzleHttp\ClientInterface|\Revolut\Api\HttpAdapter\RevolutHttpAdapterInterface|null|\stdClass $httpClient
     *
     * @return \Revolut\Api\HttpAdapter\RevolutHttpAdapterInterface
     * @throws \Revolut\Api\Exceptions\UnrecognizedClientException
     */
    public function pickHttpAdapter($httpClient)
    {
        if (! $httpClient) {
            if ($this->guzzleIsDetected()) {
                $guzzleVersion = $this->guzzleMajorVersionNumber();

                if ($guzzleVersion && in_array($guzzleVersion, [6, 7])) {
                    return Guzzle6And7RevolutHttpAdapter::createDefault();
                }
            }

            return new CurlRevolutHttpAdapter;
        }

        if ($httpClient instanceof RevolutHttpAdapterInterface) {
            return $httpClient;
        }

        if ($httpClient instanceof \GuzzleHttp\ClientInterface) {
            return new Guzzle6And7RevolutHttpAdapter($httpClient);
        }

        throw new UnrecognizedClientException('The provided http client or adapter was not recognized.');
    }

    /**
     * @return bool
     */
    private function guzzleIsDetected()
    {
        return interface_exists('\\' . \GuzzleHttp\ClientInterface::class);
    }

    /**
     * @return int|null
     */
    private function guzzleMajorVersionNumber()
    {
        // Guzzle 7
        if (defined('\GuzzleHttp\ClientInterface::MAJOR_VERSION')) {
            return (int) \GuzzleHttp\ClientInterface::MAJOR_VERSION;
        }

        // Before Guzzle 7
        if (defined('\GuzzleHttp\ClientInterface::VERSION')) {
            return (int) \GuzzleHttp\ClientInterface::VERSION[0];
        }

        return null;
    }
}
