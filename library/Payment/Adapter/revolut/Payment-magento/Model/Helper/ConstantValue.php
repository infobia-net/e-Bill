<?php

namespace Revolut\Payment\Model\Helper;

class ConstantValue
{
    public const MODULE_NAME = 'Revolut_Payment';
    public const URL_SANDBOX = 'https://sandbox-merchant.revolut.com';
    public const URL_PROD = 'https://merchant.revolut.com';
    public const MAGE_URI_WEBHOOK = 'rest/V1/revolut/order/webhook';
    public const MAGE_URI_ADDRESS_VALIDATION_WEBHOOK = 'rest/V1/revolut/order/address-validation-webhook';
    public const API = '/api';
    public const API_VER = '/api/1.0';
    public const AUTO_CANCEL_TIMEOUT = 'PT2M';
    public const ENDPOINT_PUBLIC_KEY = 'public-key/latest';
    public const ENDPOINT_CASHBACK = 'cashback';
    public const ENDPOINT_FEATURES = 'public/merchant';
    public const USE_REVOLUT_PAY_2_0 = 'USE_REVOLUT_PAY_2_0';
    public const ENDPOINT_ORDER = 'orders';
    public const ENDPOINT_CAPTURE_ORDER = 'capture';
    public const ENDPOINT_CANCEL_ORDER = 'cancel';
    public const ENDPOINT_REFUND_ORDER = 'refund';
    public const ENDPOINT_WEBHOOK = 'webhooks';
    public const ENDPOINT_AVAILABLE_PAYMENT_METHODS = 'public/available-payment-methods';
    public const SANDBOX_MODE = 'sandbox';
    public const PROD_MODE = 'prod';
    public const REVOLUT_AUTHORIZE_ONLY = 'MANUAL';
    public const REVOLUT_AUTHORIZE_ONLY_NEW_API = 'manual';
    public const REVOLUT_AUTHORIZE_CAPTURE = 'AUTOMATIC';
    public const REVOLUT_AUTHORIZE_CAPTURE_NEW_API = 'automatic';
    public const MAGENTO_AUTHORIZE = 'authorize';
    public const MAGENTO_AUTHORIZE_CAPTURE = 'authorize_capture';
    public const ORDER_COMPLETED = 'COMPLETED';
    public const ORDER_AUTHORISED = 'AUTHORISED';
    public const ORDER_IN_SETTLEMENT= 'IN_SETTLEMENT';
    public const ORDER_CANCELLED = 'CANCELLED';
    public const WEBHOOK_EVENT_ORDER_COMPLETED = 'ORDER_COMPLETED';
    public const WEBHOOK_EVENT_ORDER_AUTHORISED = 'ORDER_AUTHORISED';
    public const WEBHOOK_EVENTS = [self::WEBHOOK_EVENT_ORDER_COMPLETED , self::WEBHOOK_EVENT_ORDER_AUTHORISED];
    public const WEBHOOK_ACTION = 'webhook_action';
    public const WEBHOOK_ACTION_ACCEPT_PAYMENT = 'accept_payment';
    public const WEBHOOK_ACTION_PAYMENT_COMPLETED = 'payment_completed';
    public const WEBHOOK_ACTION_CAPTURE_PAYMENT = 'capture_payment';
    public const CARD_PAYMENT_METHOD_TYPE = 'CARD';
    public const REVOLUT_PAY_PAYMENT_METHOD_TYPE = 'REVOLUT';
    public const IS_CARDHOLDER_NAME_FIELD_ACTIVE = 'cardholder_name_field';

    public const REVOLUT_SDK_URLS = [
        'sandbox' => "https://sandbox-merchant.revolut.com/embed.js",
        'prod' => "https://merchant.revolut.com/embed.js",
        'dev' => "https://merchant.revolut.codes/embed.js"
    ];
    
    public const REVOLUT_BANNER_SDK_URLS = [
        'sandbox' => "https://sandbox-merchant.revolut.com/upsell/embed.js",
        'prod' => "https://merchant.revolut.com/upsell/embed.js",
        'dev' => "https://merchant.revolut.codes/upsell/embed.js"
    ];

    //error code
    public const FAILED_CARD = 2005;

    //state revolut order
    public const STATE_COMPLETED = 'COMPLETED';

    public const SUPPORTED_CURRENCIES = [ 'AED', 'AUD', 'BGN', 'CAD', 'CHF', 'CZK', 'DKK', 'EUR', 'GBP', 'HKD', 'HUF', 'ILS', 'ISK', 'JPY', 'MXN', 'NOK', 'NZD', 'PLN', 'QAR', 'RON', 'SAR', 'SEK', 'SGD', 'THB', 'TRY', 'USD', 'ZAR' ];
    public const CARD_GATEWAY_SUPPORTED_CURRENCIES = ['AUD', 'CAD', 'CHF', 'CZK', 'DKK', 'EUR', 'GBP', 'HKD', 'HUF', 'JPY', 'NOK', 'NZD', 'PLN', 'RON', 'SEK', 'SGD', 'USD', 'ZAR' ];
    public const SUPPORT_LINK = 'https://www.revolut.com/en-HR/business/help/merchant-accounts/payments/in-which-currencies-can-i-accept-payments';
}
