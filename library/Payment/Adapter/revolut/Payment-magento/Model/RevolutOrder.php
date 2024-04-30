<?php

namespace Revolut\Payment\Model;

use Exception;
use Magento\Framework\Registry;
use Magento\Customer\Model\Session;
use Magento\Framework\Model\Context;
use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Model\Helper\ConstantValue;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Data\Collection\AbstractDb;
use Revolut\Payment\Model\Helper\Api\RevolutOrderApi;
use Magento\Framework\Model\ResourceModel\AbstractResource;

class RevolutOrder extends AbstractModel
{
    /**
     * @var Session
     */
    protected $customerSession;
    
    /**
     * @var Logger
     */
    protected $logger;
    
    /**
     * @var array
     */
    public $revolutOrder = null;

    /**
     * @var RevolutOrderApi
     */
    protected $revolutOrderApi;

    /**
     * RevolutOrder constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param Session $customerSession
     * @param RevolutOrderApi $revolutOrderApi
     * @param Logger $logger
     * @param AbstractDb|null $resourceCollection
     * @param AbstractResource|null $resource
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        Session $customerSession,
        RevolutOrderApi $revolutOrderApi,
        Logger $logger,
        AbstractDb $resourceCollection = null,
        AbstractResource $resource = null,
        array $data = []
    ) {
        $this->logger = $logger;
        $this->revolutOrderApi = $revolutOrderApi;
        $this->customerSession = $customerSession;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     *
     */
    public function _construct()
    {
        $this->_init('Revolut\Payment\Model\ResourceModel\RevolutOrder');
    }
    
    /**
     * Create order
     *
     * @param array $params
     * @param int $quoteId
     * @param int $customerId
     * @param int $storeId
     * @param bool $fastCheckout
     * @return RevolutOrder|null
     */
    public function create($params, $quoteId, $customerId, $storeId, $fastCheckout)
    {
        try {
            if (!empty($this->getRevolutOrderId())) {
                return $this->update($params, $fastCheckout);
            }

            $this->logger->debug('create new order: ' . $quoteId);

            $revolutOrder = $this->revolutOrderApi->create($params, $storeId);
            $this->setRevolutOrderId($revolutOrder['id']);
            $this->setIncrementOrderId('');
            $this->setQuoteId($quoteId);
            $this->setCustomerId($customerId);
            $this->setStoreId($storeId);
            $this->setIsFastCheckout((int)$fastCheckout);
            $this->setPublicId($revolutOrder['public_id']);
            $this->setCurrency($params['currency']);
            $this->setOrderAmount($params['amount']);
            $this->save();
            $this->revolutOrder = $revolutOrder;
            return $this;
        } catch (Exception $e) {
            $this->logger->debug('can not create order: ' . $e->getMessage());
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Update order
     *
     * @param array $params
     * @param bool $fastCheckout
     * @return RevolutOrder|null
     */
    public function update($params, $fastCheckout)
    {
        try {
            $this->logger->debug('update order params: ' . json_encode($params));
            $this->logger->debug('update action: OrderId: ' . $this->getRevolutOrderId() . ' - StoreId: ' . $this->getStoreId());
            $revolutOrder = $this->revolutOrderApi->retrieve($this->getRevolutOrderId(), $this->getStoreId());
            
            if (empty($revolutOrder['state']) || $revolutOrder['state'] != 'PENDING') {
                throw new Exception('Can not update order, orderId: ' . $this->getRevolutOrderId());
            }

            $revolutOrder = $this->revolutOrderApi->update($this->getRevolutOrderId(), $params, $this->getStoreId());

            if (empty($revolutOrder['id'])) {
                throw new Exception('Can not load order: ' . $this->getRevolutOrderId() . ' - storeId: ' . $this->getStoreId() . ' : ' . json_encode($revolutOrder));
            }

            if ($this->getOrderAmount() != $params['amount'] || $this->getCurrency() != $params['currency'] || (int)$this->getIsFastCheckout() != (int)$fastCheckout) {
                $this->setCurrency($params['currency']);
                $this->setOrderAmount($params['amount']);
                $this->setIsFastCheckout((int)$fastCheckout);
                $this->save();
            }

            $this->revolutOrder = $revolutOrder;
            return $this;
        } catch (Exception $e) {
            $this->logger->debug('can not update order: ' . $e->getMessage());
        }

        return null;
    }
    
    /**
     * Cancel order
     *
     * @param string $publicId
     * @return RevolutOrder
     */
    public function cancel($publicId)
    {
        try {
            $this->load($publicId, 'public_id'); // @phpstan-ignore-line

            if (empty($this->getRevolutOrderId())) {
                throw new Exception('Cancel action: Can not load order with public_id: ' . $publicId);
            }

            $this->logger->debug('Cancel action: OrderId: ' . $this->getRevolutOrderId() . ' - StoreId: ' . $this->getStoreId());
            $this->revolutOrder = $this->revolutOrderApi->cancel($this->getRevolutOrderId(), $this->getStoreId());
            return $this;
        } catch (Exception $e) {
            $this->logger->debug('can not create order: ' . $e->getMessage());
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Refund order
     *
     * @param array $params
     * @return RevolutOrder
     */
    public function refund($params)
    {
        $this->load($params['publicId'], 'public_id');
        
        if (empty($this->getRevolutOrderId())) {
            throw new Exception('Refund action: Can not load order with public_id: ' . $params['publicId']);
        }

        $this->logger->debug('Refund action: OrderId: ' . $this->getRevolutOrderId() . ' - StoreId: ' . $this->getStoreId());
        $this->revolutOrder = $this->revolutOrderApi->refund($this->getRevolutOrderId(), $params['amount'], $params['currency'], $this->getStoreId());
        return $this;
    }

     /**
      * Capture order
      *
      * @param array $params
      * @return RevolutOrder
      */
    public function capture($params)
    {
        $this->load($params['publicId'], 'public_id');
        
        if (empty($this->getRevolutOrderId())) {
            throw new Exception('Capture action: Can not load order with public_id: ' . $params['publicId']);
        }

        $this->logger->debug('Capture action: OrderId: ' . $this->getRevolutOrderId() . ' - StoreId: ' . $this->getStoreId());
        $this->revolutOrder = $this->revolutOrderApi->capture($this->getRevolutOrderId(), $params['amount'], $this->getStoreId());
        return $this;
    }
    
     /**
      * Get Order model by key
      *
      * @param string $key
      * @param mixed $value
      * @return RevolutOrder
      */
    public function retrieveBy($key, $value)
    {
        $this->load($value, $key); // @phpstan-ignore-line
        
        if (empty($this->getRevolutOrderId())) {
            throw new Exception('RetrieveBy action: Can not load order with ' . $key . ': ' . $value);
        }

        $this->logger->debug('RetrieveBy action: OrderId: ' . $this->getRevolutOrderId() . ' - StoreId: ' . $this->getStoreId());

        $this->revolutOrder = $this->revolutOrderApi->retrieve($this->getRevolutOrderId(), $this->getStoreId());
        return $this;
    }
    
     /**
      * Get Order model
      *
      * @return RevolutOrder|null
      */
    public function retrieve()
    {
        if (empty($this->getRevolutOrderId())) {
            return null;
        }
        $this->logger->debug('Retrieve action: OrderId: ' . $this->getRevolutOrderId() . ' - StoreId: ' . $this->getStoreId());
        $this->revolutOrder = $this->revolutOrderApi->retrieve($this->getRevolutOrderId(), $this->getStoreId());
        return $this;
    }
    
     /**
      * Update merchant order id.
      *
      * @param string $magentoOrderId
      * @return RevolutOrder|null
      */
    public function updateMerchantOrderId($magentoOrderId)
    {
        if (empty($this->getRevolutOrderId())) {
            return null;
        }

        $this->setIncrementOrderId($magentoOrderId);
        $this->save();
        $this->logger->debug('UpdateMerchantOrderId action: OrderId: ' . $this->getRevolutOrderId() . ' - StoreId: ' . $this->getStoreId());

        $this->revolutOrder = $this->revolutOrderApi->updateMerchantOrderId($this->getRevolutOrderId(), $magentoOrderId, $this->getStoreId());

        return $this;
    }
    
    /**
     * Check Payment completed
     *
     * @return bool
     */
    public function isPaymentCompleted()
    {
        if (empty($this->getRevolutOrderId())) {
            return false;
        }

        $this->retrieve();
        $this->logger->debug('isPaymentCompleted action: OrderId: ' . $this->revolutOrder['id'] . ' state: ' . $this->revolutOrder['state']);
        return $this->revolutOrder['state'] == ConstantValue::ORDER_COMPLETED;
    }
    
    /**
     * Check if payment type is Card
     *
     * @return bool
     */
    public function isCardPayment()
    {
        if (empty($this->getRevolutOrderId())) {
            return false;
        }

        $this->retrieve();

        return isset($this->revolutOrder['payments'][0]['payment_method']['type']) && strtoupper($this->revolutOrder['payments'][0]['payment_method']['type']) == ConstantValue::CARD_PAYMENT_METHOD_TYPE;
    }
    
    /**
     * Check if payment type is Card
     *
     * @return bool
     */
    public function isRevolutPayPayment()
    {
        if (empty($this->getRevolutOrderId())) {
            return false;
        }

        $this->retrieve();

        return isset($this->revolutOrder['payments'][0]['payment_method']['type']) && strtoupper($this->revolutOrder['payments'][0]['payment_method']['type']) == ConstantValue::REVOLUT_PAY_PAYMENT_METHOD_TYPE;
    }
    
    /**
     * Check Can Capture the order
     *
     * @return bool
     */
    public function canCapture()
    {
        if (empty($this->getRevolutOrderId())) {
            return false;
        }

        $this->retrieve();
        $this->logger->debug('canCapture action: OrderId: ' . $this->revolutOrder['id'] . ' state: ' . $this->revolutOrder['state']);
        return $this->revolutOrder['state'] == ConstantValue::ORDER_AUTHORISED;
    }
}
