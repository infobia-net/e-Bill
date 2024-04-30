<?php

namespace Revolut\Payment\Block\PaymentRequest;

use Magento\Catalog\Block\ShortcutInterface;

class PaymentRequestButtonBlock extends PaymentRequestButton implements ShortcutInterface
{
    /**
     * @var string
     */
    protected $_template = 'Revolut_Payment::prbutton/fast-checkout.phtml';

    /**
     * @var bool
     */
    public $isCatalogPage = false;
    
    /**
     * @var bool
     */
    public $isShoppingCart = false;

    /**
     * @return mixed.
     */
    public function getAlias()
    {
        return $this->getData("alias");
    }

    /**
     * @param  bool $isCatalogPage
     * @return $this
     */
    public function setIsInCatalogProduct($isCatalogPage)
    {
        $this->isCatalogPage = $isCatalogPage;
        return $this;
    }

    /**
     * @param  bool $isShoppingCart
     * @return void
     */
    public function setIsShoppingCart($isShoppingCart)
    {
        $this->isShoppingCart = $isShoppingCart;
    }
    
    /**
     * @return bool
     */
    public function getIsShoppingCart()
    {
        return $this->isShoppingCart;
    }

    /**
     * Should render or not
     *
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    protected function shouldRender()
    {
        return $this->isShoppingCart;
    }

    /**
     * Render the block if needed
     *
     * @return string
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    protected function _toHtml()
    {
        if (!$this->shouldRender()) {
            return '';
        }

        return parent::_toHtml();
    }
}
