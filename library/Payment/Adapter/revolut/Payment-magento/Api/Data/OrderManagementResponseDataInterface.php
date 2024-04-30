<?php

namespace Revolut\Payment\Api\Data;

/**
 * Interface OrderManagementResponseDataInterface
 * @api
 */
interface OrderManagementResponseDataInterface
{

    public const KEY_SUCCESS = 'success';

    public const KEY_PROGRESS = 'progress';

    public const KEY_REDIRECT_URL = 'redirect_url';

    public const KEY_CURRENCY = 'currency';

    public const KEY_MESSAGE = 'message';

    public const KEY_CUSTOMER_ID = 'customer_id';

    public const KEY_QUOTE_ID = 'quote_id';

    public const KEY_STORE_ID = 'store_id';

    public const KEY_AMOUNT = 'amount';

    public const KEY_PUBLIC_ID = 'public_id';

    public const KEY_PUBLIC_KEY = 'public_key';

    public const KEY_AVAILABLE_CARD_BRANDS = 'available_card_brands';

    public const KEY_IS_REWARD_BANNER_ACTIVE = 'is_reward_banner_active';
    
    /**
     * @return string
     */
    public function getRedirectUrl();
    
    /**
     * @param String|mixed $redirectUrl
     * @return $this
     */
    public function setRedirectUrl($redirectUrl);
    
    /**
     * @return bool
     */
    public function getSuccess();
    
    /**
     * @param bool|mixed $success
     * @return $this
     */
    public function setSuccess($success);
    
    /**
     * @return bool
     */
    public function getIsRewardBannerActive();
    
    /**
     * @param bool|mixed $active
     * @return $this
     */
    public function setIsRewardBannerActive($active);
    
    /**
     * @return bool
     */
    public function getInProgress();
    
    /**
     * @param bool|mixed $progress
     * @return $this
     */
    public function setInProgress($progress);
    
    /**
     * @return int
     */
    public function getCustomerId();
    
    /**
     * @param int|mixed $customerId
     * @return $this
     */
    public function setCustomerId($customerId);
    
    /**
     * @return int
     */
    public function getQuoteId();
    
    /**
     * @param int|mixed $quoteId
     * @return $this
     */
    public function setQuoteId($quoteId);
    
    /**
     * @return int
     */
    public function getStoreId();
    
    /**
     * @param int|mixed $storeId
     * @return $this
     */
    public function setStoreId($storeId);
    
    /**
     * @return int
     */
    public function getAmount();
    
    /**
     * @param int|mixed $amount
     * @return $this
     */
    public function setAmount($amount);
    
    /**
     * @return string
     */
    public function getPublicId();
    
    /**
     * @param string|mixed $publicId
     * @return $this
     */
    public function setPublicId($publicId);

    /**
     * @return string
     */
    public function getPublicKey();
    
    /**
     * @param string|mixed $publicKey
     * @return $this
     */
    public function setPublicKey($publicKey);
    
    /**
     * @return string
     */
    public function getCurrency();
    
    /**
     * @param string|mixed $currency
     * @return $this
     */
    public function setCurrency($currency);
    
    /**
     * @return string
     */
    public function getMessage();
    
    /**
     * @param string|mixed $message
     * @return $this
     */
    public function setMessage($message);
    
    /**
     * @return string[]
     */
    public function getAvailableCardBrands();
    
    /**
     * @param string[]|mixed $availableCardBrands
     * @return $this
     */
    public function setAvailableCardBrands($availableCardBrands);
}
