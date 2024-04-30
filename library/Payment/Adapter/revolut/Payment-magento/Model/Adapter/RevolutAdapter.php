<?php

namespace Revolut\Payment\Model\Adapter;

use Revolut\Payment\Model\RevolutOrder;
use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Gateway\Helper\AmountProvider;
use Magento\Quote\Api\CartRepositoryInterface;
use Magento\Sales\Model\OrderFactory;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
class RevolutAdapter
{
    /**
     * @var Logger
     */
    public $logger;
    
    /**
     * @var AmountProvider
     */
    public $amountProvider;

    /**
     * @var RevolutOrder
     */
    protected $revolutOrder;
    
    /**
     * @var CartRepositoryInterface
     */
    protected $cartRepository;
    
    /**
     * @var OrderFactory
     */
    protected $orderFactory;

    /**
     * @param Logger $logger
     * @param RevolutOrder $revolutOrder
     * @param AmountProvider $amountProvider
     * @param CartRepositoryInterface $cartRepository
     * @param OrderFactory $orderFactory
     */
    public function __construct(
        Logger $logger,
        RevolutOrder $revolutOrder,
        AmountProvider $amountProvider,
        CartRepositoryInterface $cartRepository,
        OrderFactory $orderFactory
    ) {
        $this->logger = $logger;
        $this->revolutOrder = $revolutOrder;
        $this->amountProvider = $amountProvider;
        $this->cartRepository = $cartRepository;
        $this->orderFactory = $orderFactory;
    }
    
    /**
     * @param array $params
     * @return RevolutOrder
     */
    public function retrieve($params)
    {
        try {
            $this->revolutOrder = $this->revolutOrder->retrieveBy('public_id', $params['publicId']);
            return $this->revolutOrder;
        } catch (\Exception $e) {
            $this->logger->debug('An error occured while processing retrieve action: ' . $e->getMessage());
            throw new \Exception("Internal Error Processing Payment Request");
        }
    }
    
    /**
     * @param array $params
     * @return RevolutOrder
     */
    public function capture($params)
    {
        try {
            $this->logger->debug(' -> start capture process: ' . json_encode($params));
            $this->retrieve($params);
            $canCapture = $this->revolutOrder->canCapture();
            $this->logger->debug('can capture orderId: ' . $this->revolutOrder->getRevolutOrderId() . ' ' . $canCapture);

            $paymentCurrency = '';
            $orderTotal = 0;
            $paymentTotal = 0;

            try {
                if ($this->revolutOrder->getIncrementOrderId()) {
                    $order = $this->orderFactory->create()->loadByIncrementId($this->revolutOrder->getIncrementOrderId());
                    $paymentCurrency = $order->getOrderCurrencyCode();
                    $orderTotal = $order->getBaseGrandTotal();
                    $paymentTotal = $order->getGrandTotal();
                } else {
                    $quote = $this->cartRepository->get($this->revolutOrder->getQuoteId());
                    $paymentCurrency = $quote->getQuoteCurrencyCode();
                    $orderTotal = $quote->getBaseGrandTotal();
                    $paymentTotal = $quote->getGrandTotal();
                }
            } catch (\Exception $e) {
                $this->logger->critical($e->getMessage());
            }

            if ($canCapture) {
                list($amount, $currency) = $this->amountProvider->convert( // @phpstan-ignore-line
                    $params['amount'],
                    $params['currency'],
                    $paymentCurrency,
                    $orderTotal,
                    $paymentTotal
                );
                $params['amount'] = $amount;
                $params['currency'] = $currency;
                $this->revolutOrder = $this->revolutOrder->capture($params);
            } else {
                throw new \Exception(__('Can not capture order. Payment state: ' . $this->revolutOrder->revolutOrder['state']));
            }
            $this->logger->debug(' -> end capture process <- ');
            return $this->revolutOrder;
        } catch (\Exception $e) {
            $this->logger->debug('An error occured while processing capture action: ' . $e->getMessage());
            throw new \Magento\Framework\Exception\LocalizedException(__($e->getMessage()));
        }
    }
    
    /**
     * @param array $params
     * @return RevolutOrder
     */
    public function refund($params)
    {
        $this->logger->debug(' -> start refund process: ' . json_encode($params));
        
        $this->retrieve($params);
         
        $paymentCurrency = '';
        $orderTotal = 0;
        $paymentTotal = 0;

        try {
            $order = $this->orderFactory->create()->loadByIncrementId($this->revolutOrder->getIncrementOrderId());
            $paymentCurrency = $order->getOrderCurrencyCode();
            $orderTotal = $order->getBaseGrandTotal();
            $paymentTotal = $order->getGrandTotal();
        } catch (\Exception $e) {
            $this->logger->critical($e->getMessage());
        }

        list($amount, $currency) = $this->amountProvider->convert( // @phpstan-ignore-line
            $params['amount'],
            $params['currency'],
            $paymentCurrency,
            $orderTotal,
            $paymentTotal
        );
        $params['amount'] = $amount;
        $params['currency'] = $currency;
        $this->revolutOrder = $this->revolutOrder->refund($params);
        $this->logger->debug(' -> end refund process <- ');
        return $this->revolutOrder;
    }
    
    /**
     * @param array $params
     * @return RevolutOrder
     */
    public function cancel($params)
    {
        $this->logger->debug('process cancel: ' . json_encode($params));
        $this->revolutOrder = $this->revolutOrder->cancel($params['publicId']);
        return $this->revolutOrder;
    }
}
