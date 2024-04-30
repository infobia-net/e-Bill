<?php

namespace Revolut\Payment\Model\ResourceModel\RevolutOrder;

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
        $this->_init('Revolut\Payment\Model\RevolutOrder', 'Revolut\Payment\Model\ResourceModel\RevolutOrder');
    }

    /**
     * @param int $quoteId
     * @param int $storeId
     *
     * @return Collection
     */
    public function getOrderByQuoteAndStore($quoteId, $storeId)
    {
        $collection = $this
            ->addFieldToSelect('*')
            ->addFieldToFilter('quote_id', ['eq' => $quoteId])
            ->addFieldToFilter('store_id', ['eq' => $storeId]);

        return $collection;
    }
    
    /**
     * @param String $orderId
     * @return Collection
     */
    public function getOrderByRevolutOrderId($orderId)
    {
        $collection = $this
            ->addFieldToSelect('*')
            ->addFieldToFilter('revolut_order_id', ['eq' => $orderId]);

        return $collection;
    }
}
