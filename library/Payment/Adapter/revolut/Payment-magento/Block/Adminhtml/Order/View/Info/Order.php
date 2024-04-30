<?php

namespace Revolut\Payment\Block\Adminhtml\Order\View\Info;

use Magento\Framework\Registry;
use Revolut\Payment\Model\Helper\Logger;
use Magento\Backend\Block\Template;
use Revolut\Payment\Model\RevolutOrder;

class Order extends Template
{
    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var RevolutOrder
     */
    protected $revolutOrder;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * Order constructor.
     *
     * @param Template\Context $context
     * @param Registry $registry
     * @param RevolutOrder $revolutOrder
     * @param Logger $logger
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Registry $registry,
        RevolutOrder $revolutOrder,
        Logger $logger,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->logger = $logger;
        $this->revolutOrder = $revolutOrder;
        parent::__construct($context, $data);
    }

    /**
     *
     * @return string
     */
    public function getOrderId()
    {
        try {
            $order = $this->registry->registry('current_order');
            $incrementId = $order->getIncrementId();
            $revolutOrder = $this->revolutOrder->retrieveBy('increment_order_id', $incrementId);
            return $revolutOrder->getRevolutOrderId();
        } catch (\Exception $e) {
            return '';
        }
    }
    
    /**
     *
     * @return array|bool
     */
    public function getPaymentInfo()
    {
        try {
            $order = $this->registry->registry('current_order');
            $incrementId = $order->getIncrementId();
            $revolutOrderModel = $this->revolutOrder->retrieveBy('increment_order_id', $incrementId);
            $revolutOrder = $revolutOrderModel->revolutOrder;

            if (empty($revolutOrder['payments']) || empty($revolutOrder['payments'][0])) {
                return false;
            }
        
            $paymentData = $revolutOrder['payments'][0];

            if (empty($paymentData['payment_method']) ||
                !isset($paymentData['payment_method']['type']) ||
                $paymentData['payment_method']['type'] != 'CARD' ||
                empty($paymentData['payment_method']['card'])) {
                    return false;
            }

            $paymentInfo = $paymentData['payment_method']['card'];
            return $paymentInfo;
        } catch (\Exception $e) {
            return false;
        }
    }
}
