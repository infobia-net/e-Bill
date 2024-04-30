<?php

namespace Revolut\Payment\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class AppendPaymentRequestButtonObserver implements ObserverInterface
{
    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $shortcutButtons = $observer->getEvent()->getContainer();

        $paymentRequestButtonBlock = $shortcutButtons->getLayout()->createBlock(
            \Revolut\Payment\Block\PaymentRequest\PaymentRequestButtonBlock::class,
            '',
            []
        );

        $paymentRequestButtonBlock->setIsInCatalogProduct(
            $observer->getEvent()->getIsCatalogProduct()
        )->setShowOrPosition(
            $observer->getEvent()->getOrPosition()
        );
        
        $paymentRequestButtonBlock->setIsShoppingCart($observer->getEvent()->getIsShoppingCart());

        $paymentRequestButtonBlock->setIsCart(get_class($shortcutButtons) == \Magento\Checkout\Block\QuoteShortcutButtons::class);

        $shortcutButtons->addShortcut($paymentRequestButtonBlock);
    }
}
