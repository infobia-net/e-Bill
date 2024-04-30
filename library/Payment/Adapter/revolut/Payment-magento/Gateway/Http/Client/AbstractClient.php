<?php

namespace Revolut\Payment\Gateway\Http\Client;

use Psr\Log\LoggerInterface;
use Magento\Payment\Gateway\Http\ClientException;
use Magento\Payment\Gateway\Http\ClientInterface;
use Magento\Payment\Gateway\Http\TransferInterface;
use Magento\Payment\Model\Method\Logger;
use Revolut\Payment\Model\RevolutOrder;
use Revolut\Payment\Model\Adapter\RevolutAdapter;

abstract class AbstractClient implements ClientInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var Logger
     */
    protected $customLogger;

    /**
     * @var RevolutAdapter
     */
    protected $adapter;

    /**
     * Constructor
     *
     * @param LoggerInterface $logger
     * @param Logger $customLogger
     * @param RevolutAdapter $adapter
     */
    public function __construct(
        LoggerInterface $logger,
        Logger $customLogger,
        RevolutAdapter $adapter
    ) {
        $this->logger = $logger;
        $this->customLogger = $customLogger;
        $this->adapter = $adapter;
    }

    /**
     * @inheritdoc
     */
    public function placeRequest(TransferInterface $transferObject)
    {
        $data = $transferObject->getBody();
        $response = [
            'object' => [],
        ];

        $log = [
            'request' => $data,
            'client' => static::class
        ];

        try {
            $response['object'] = $this->process((array)$data);
        } catch (\Exception $e) {
            $message = __($e->getMessage() ?: 'Sorry, but something went wrong');
            $this->logger->critical($message);
            throw new ClientException($message);
        } finally {
            $log['response'] = (array) $response['object'];
            $this->customLogger->debug($log);
        }

        return $response;
    }

    /**
     * Process http request
     * @param array $data
     * @return RevolutOrder
     */
    abstract protected function process(array $data);
}
