<?php

namespace Revolut\Payment\Model\Api;

use http\Env\Request as req;
use Revolut\Payment\Model\Helper\Logger;
use Magento\Framework\Json\Helper\Data;
use Magento\Framework\Webapi\Rest\Request;
use Revolut\Payment\Api\LogManagementInterface;

class LogManagement implements LogManagementInterface
{
    /**
     * @var Data
     */
    protected $jsonHelper;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Logger
     */
    protected $loggerRevolut;

    /**
     * LogManagement constructor.
     *
     * @param Data $jsonHelper
     * @param Request $request
     * @param Logger $loggerRevolut
     */
    public function __construct(
        Data $jsonHelper,
        Request $request,
        Logger $loggerRevolut
    ) {
        $this->jsonHelper = $jsonHelper;
        $this->request = $request;
        $this->loggerRevolut = $loggerRevolut;
    }

    /**
     * Log FE related errors
     *
     * @api
     * @return void.
     */
    public function log()
    {
        $this->loggerRevolut->debug("========== error trace begin ========== ");
        $this->loggerRevolut->error($this->jsonHelper->jsonEncode($this->request->getBodyParams()));
        $this->loggerRevolut->debug("========== error trace end ========== ");
    }
}
