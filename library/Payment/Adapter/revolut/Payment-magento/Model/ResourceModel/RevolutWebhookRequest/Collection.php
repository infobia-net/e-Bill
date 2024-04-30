<?php

namespace Revolut\Payment\Model\ResourceModel\RevolutWebhookRequest;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Constructor
     */
    public function _construct()
    {
        $this->_init('Revolut\Payment\Model\RevolutWebhookRequest', 'Revolut\Payment\Model\ResourceModel\RevolutWebhookRequest');
    }
}
