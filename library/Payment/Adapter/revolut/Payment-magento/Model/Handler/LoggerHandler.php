<?php

namespace Revolut\Payment\Model\Handler;

use Magento\Framework\Logger\Handler\Base;

/**
 * Class Handler
 */
class LoggerHandler extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/revolut/debug.log';
    /**
     * @var int
     */
    protected $loggerType = \Monolog\Logger::DEBUG;
}
