<?php
namespace Revolut\Payment\Model;

use Magento\Quote\Api\Data\CartInterface;

class ChangeQuoteControl extends \Magento\Quote\Model\ChangeQuoteControl
{
    /**
     * @var boolean
     */
    protected $allowed = false;

    /**
     * Set is allowed on
     * @return void
     */
    public function setAllowed()
    {
        $this->allowed = true;
    }
    
     /**
      * Check is allowed
      * @param CartInterface $quote
      * @return boolean
      */
    public function isAllowed(CartInterface $quote): bool
    {
        if ($this->allowed) {
            return true;
        }

        return parent::isAllowed($quote);
    }
}
