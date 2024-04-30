<?php

namespace Revolut\Payment\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class RevolutOrder extends AbstractDb
{
    /**
     * Constructor
     */
    public function _construct()
    {
        $this->_init('revolut_payment_order_details', 'id');
    }
}
