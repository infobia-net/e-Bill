<?php

namespace Revolut\Payment\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class RevolutWebhookRequest extends AbstractDb
{
    /**
     * Constructor
     */
    public function _construct()
    {
        $this->_init('revolut_webhook_request', 'id');
    }
}
