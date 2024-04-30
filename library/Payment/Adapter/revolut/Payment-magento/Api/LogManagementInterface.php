<?php

namespace Revolut\Payment\Api;

interface LogManagementInterface
{
    /**
     * Log FE related errors
     *
     * @api
     * @return void.
     */
    public function log();
}
