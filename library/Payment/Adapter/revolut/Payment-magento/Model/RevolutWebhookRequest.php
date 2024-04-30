<?php
namespace Revolut\Payment\Model;

use Magento\Framework\Model\AbstractModel;

class RevolutWebhookRequest extends AbstractModel
{
     /**
      * Construct
      */
    protected function _construct()
    {
        $this->_init('Revolut\Payment\Model\ResourceModel\RevolutWebhookRequest');
    }
}
