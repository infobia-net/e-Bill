<?php

namespace Revolut\Payment\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\LayoutInterface;
use Magento\Framework\Event\Observer;
use Revolut\Payment\Model\Helper\Logger;

class OnepageControllerSuccessActionObserver implements ObserverInterface
{
    /**
     * @var LayoutInterface
     */
    private $layout;
    
    /**
     * @var Logger
     */
    private $logger;

    /**
     * Constructor
     *
     * @param LayoutInterface $layout
     * @param Logger $logger
     */
    public function __construct(
        LayoutInterface $layout,
        Logger $logger
    ) {
        $this->layout = $layout;
        $this->logger = $logger;
    }

    /**
     * Execute observer
     *
     * @param Observer $observer
     * @return void|null
     */
    public function execute(
        Observer $observer
    ) {
        try {
            $block = $this->layout->getBlock('revolut.reward.banner.block');
                        
            if (!$block || !($block instanceof \Magento\Framework\View\Element\BlockInterface)) {
                return;
            }

        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage());
        }
    }
}
