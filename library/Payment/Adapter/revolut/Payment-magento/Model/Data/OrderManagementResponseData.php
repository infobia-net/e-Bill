<?php

namespace Revolut\Payment\Model\Data;

class OrderManagementResponseData extends \Magento\Framework\Api\AbstractExtensibleObject implements \Revolut\Payment\Api\Data\OrderManagementResponseDataInterface
{
    /**
     * @return string|mixed
     */
    public function getRedirectUrl()
    {
        return $this->_get(self::KEY_REDIRECT_URL);
    }
    
    /**
     * @param string $redirectUrl
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->setData(self::KEY_REDIRECT_URL, $redirectUrl);
        return $this;
    }

    /**
     * @return bool|mixed
     */
    public function getSuccess()
    {
        return $this->_get(self::KEY_SUCCESS);
    }
    
    /**
     * @param bool $success
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->setData(self::KEY_SUCCESS, $success);
        return $this;
    }
    
    /**
     * @return bool|mixed
     */
    public function getIsRewardBannerActive()
    {
        return $this->_get(self::KEY_IS_REWARD_BANNER_ACTIVE);
    }
    
    /**
     * @param bool $active
     * @return $this
     */
    public function setIsRewardBannerActive($active)
    {
        $this->setData(self::KEY_IS_REWARD_BANNER_ACTIVE, $active);
        return $this;
    }
    
    /**
     * @return bool|mixed
     */
    public function getInProgress()
    {
        return $this->_get(self::KEY_PROGRESS);
    }
    
    /**
     * @param bool $progress
     * @return $this
     */
    public function setInProgress($progress)
    {
        $this->setData(self::KEY_PROGRESS, $progress);
        return $this;
    }

    /**
     * @return string|mixed
     */
    public function getCurrency()
    {
        return $this->_get(self::KEY_CURRENCY);
    }
    
    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        return $this->setData(self::KEY_CURRENCY, $currency);
    }

    /**
     * @return string|mixed
     */
    public function getMessage()
    {
        return $this->_get(self::KEY_MESSAGE);
    }
    
    /**
     * @param string $message
     * @@return $this
     */
    public function setMessage($message)
    {
        $this->setData(self::KEY_MESSAGE, $message);
        return $this;
    }
    
    /**
     * @return int|mixed
     */
    public function getCustomerId()
    {
        return $this->_get(self::KEY_CUSTOMER_ID);
    }
    
    /**
     * @param int $customerId
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        return $this->setData(self::KEY_CUSTOMER_ID, $customerId);
    }
    
    /**
     * @return int|mixed
     */
    public function getQuoteId()
    {
        return $this->_get(self::KEY_QUOTE_ID);
    }
    
    /**
     * @param int|mixed  $quoteId
     * @return $this
     */
    public function setQuoteId($quoteId)
    {
        return $this->setData(self::KEY_QUOTE_ID, $quoteId);
    }
    
    /**
     * @return int|mixed
     */
    public function getStoreId()
    {
        return $this->_get(self::KEY_STORE_ID);
    }
    
    /**
     * @param int $storeId
     * @return $this
     */
    public function setStoreId($storeId)
    {
        return $this->setData(self::KEY_STORE_ID, $storeId);
    }
    
    /**
     * @return int|mixed
     */
    public function getAmount()
    {
        return $this->_get(self::KEY_AMOUNT);
    }
    
    /**
     * @param int|mixed  $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        return $this->setData(self::KEY_AMOUNT, $amount);
    }
    
    /**
     * @return string|mixed
     */
    public function getPublicId()
    {
        return $this->_get(self::KEY_PUBLIC_ID);
    }
    
    /**
     * @param string $publicId
     * @return $this
     */
    public function setPublicId($publicId)
    {
        return $this->setData(self::KEY_PUBLIC_ID, $publicId);
    }

    /**
     * @return string|mixed
     */
    public function getPublicKey()
    {
        return $this->_get(self::KEY_PUBLIC_KEY);
    }
    
    /**
     * @param string $publicKey
     * @return $this
     */
    public function setPublicKey($publicKey)
    {
        return $this->setData(self::KEY_PUBLIC_KEY, $publicKey);
    }
    
    /**
     * @return string[]|mixed
     */
    public function getAvailableCardBrands()
    {
        return $this->_get(self::KEY_AVAILABLE_CARD_BRANDS);
    }
    
    /**
     * @param string[] $availableCardBrands
     * @return $this
     */
    public function setAvailableCardBrands($availableCardBrands)
    {
        return $this->setData(self::KEY_AVAILABLE_CARD_BRANDS, $availableCardBrands);
    }
}
