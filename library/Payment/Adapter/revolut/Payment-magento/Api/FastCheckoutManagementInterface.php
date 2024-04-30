<?php

namespace Revolut\Payment\Api;

use Magento\Quote\Model\Quote;
use Revolut\Payment\Api\Data\AddressDataInterface;
use Revolut\Payment\Model\Data\FastCheckoutResponseData;
use Revolut\Payment\Model\Data\ValidateOrderRequestData;
use Revolut\Payment\Model\Data\FastCheckoutParametersResponseData;

interface FastCheckoutManagementInterface
{
    /**
     * Creates card for Express checkout
     *
     * @api
     * @param String $revolutPublicId
     * @param String $productForm
     * @param bool $revolutPayFastCheckout
     * @return FastCheckoutResponseData
     */
    public function addToCart(String $revolutPublicId, String $productForm, bool $revolutPayFastCheckout = false);

    /**
     * Handle address validation webhook callbacks
     *
     * @api
     * @param String $orderId
     * @param AddressDataInterface $shippingAddress
     * @return FastCheckoutResponseData
     */
    public function addressValidationWebhook(String $orderId, AddressDataInterface $shippingAddress);

    /**
     * Loads shipping options for selected address
     *
     * @api
     * @param String $revolutPublicId
     * @param AddressDataInterface $addressData
     * @param Object $quote
     * @return FastCheckoutResponseData
     */
    public function loadShippingOptions(String $revolutPublicId, AddressDataInterface $addressData, Object $quote = null);
    
    /**
     * Sets selected shipping option
     *
     * @api
     * @param String $selectedCarrierId
     * @param String $revolutPublicId
     * @param AddressDataInterface $addressData
     * @param Object $quote
     * @return FastCheckoutResponseData
     */
    public function setShippingOption(String $selectedCarrierId, String $revolutPublicId, AddressDataInterface $addressData, Object $quote = null);
    
    /**
     * Validate Order order
     *
     * @api
     * @param String $publicId
     * @param ValidateOrderRequestData $address
     * @param String $carrierId
     * @return FastCheckoutResponseData
     */
    public function validateOrder(String $publicId, ValidateOrderRequestData $address = null, String $carrierId = null);
    
    /**
     * Get params
     *
     * @api
     * @param String $location
     * @return FastCheckoutParametersResponseData
     */
    public function getParams(String $location);
}
