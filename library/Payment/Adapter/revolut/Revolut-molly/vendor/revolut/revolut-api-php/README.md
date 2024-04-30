<p align="center">
  <img src="https://info.revolut.com/hubfs/github/php/logo.png" width="128" height="128"/>
</p>
<h1 align="center">Revolut API client for PHP</h1>

<img src="https://info.revolut.com/hubfs/github/php/editor.png" />

Accepting [iDEAL](https://www.revolut.com/payments/ideal/), [Apple Pay](https://www.revolut.com/payments/apple-pay), [Bancontact](https://www.revolut.com/payments/bancontact/), [SOFORT Banking](https://www.revolut.com/payments/sofort/), [Creditcard](https://www.revolut.com/payments/credit-card/), [SEPA Bank transfer](https://www.revolut.com/payments/bank-transfer/), [SEPA Direct debit](https://www.revolut.com/payments/direct-debit/), [PayPal](https://www.revolut.com/payments/paypal/), [Belfius Direct Net](https://www.revolut.com/payments/belfius/), [KBC/CBC](https://www.revolut.com/payments/kbc-cbc/), [paysafecard](https://www.revolut.com/payments/paysafecard/), [ING Home'Pay](https://www.revolut.com/payments/ing-homepay/), [Giropay](https://www.revolut.com/payments/giropay/), [EPS](https://www.revolut.com/payments/eps/), [Przelewy24](https://www.revolut.com/payments/przelewy24/), [Postepay](https://www.revolut.com/en/payments/postepay), [In3](https://www.revolut.com/payments/in3/), [Klarna](https://www.revolut.com/payments/klarna-pay-later/) ([Pay now](https://www.revolut.com/payments/klarna-pay-now/), [Pay later](https://www.revolut.com/payments/klarna-pay-later/), [Slice it](https://www.revolut.com/payments/klarna-slice-it/), [Pay in 3](https://www.revolut.com/payments/klarna-pay-in-3/)), [Giftcard](https://www.revolut.com/payments/gift-cards/) and [Voucher](https://www.revolut.com/en/payments/meal-eco-gift-vouchers) online payments without fixed monthly costs or any punishing registration procedures. Just use the Revolut API to receive payments directly on your website or easily refund transactions to your customers.

[![Build Status](https://github.com/revolut/revolut-api-php/workflows/tests/badge.svg)](https://github.com/revolut/revolut-api-php/actions)
[![Latest Stable Version](https://poser.pugx.org/revolut/revolut-api-php/v/stable)](https://packagist.org/packages/revolut/revolut-api-php)
[![Total Downloads](https://poser.pugx.org/revolut/revolut-api-php/downloads)](https://packagist.org/packages/revolut/revolut-api-php)

## Requirements ##
To use the Revolut API client, the following things are required:

+ Get yourself a free [Revolut account](https://www.revolut.com/signup). No sign up costs.
+ Now you're ready to use the Revolut API client in test mode.
+ Follow [a few steps](https://www.revolut.com/dashboard/?modal=onboarding) to enable payment methods in live mode, and let us handle the rest.
+ PHP >= 7.0
+ Up-to-date OpenSSL (or other SSL/TLS toolkit)

For leveraging [Revolut Connect](https://docs.revolut.com/oauth/overview) (advanced use cases only), we recommend also installing our [OAuth2 client](https://github.com/revolut/oauth2-revolut-php).

## Composer Installation ##

By far the easiest way to install the Revolut API client is to require it with [Composer](http://getcomposer.org/doc/00-intro.md).

    $ composer require revolut/revolut-api-php:^2.0

    {
        "require": {
            "revolut/revolut-api-php": "^2.0"
        }
    }

The version of the API client corresponds to the version of the API it implements. Check the [notes on migration](https://docs.revolut.com/migrating-v1-to-v2) to see what changes you need to make if you want to start using a newer API version.


## Manual Installation ##
If you're not familiar with using composer we've added a ZIP file to the releases containing the API client and all the packages normally installed by composer.
Download the ``revolut-api-php.zip`` from the [releases page](https://github.com/revolut/revolut-api-php/releases).

Include the ``vendor/autoload.php`` as shown in [Initialize example](https://github.com/revolut/revolut-api-php/blob/master/examples/initialize.php).

## How to receive payments ##

To successfully receive a payment, these steps should be implemented:

1. Use the Revolut API client to create a payment with the requested amount, currency, description and optionally, a payment method. It is important to specify a unique redirect URL where the customer is supposed to return to after the payment is completed.

2. Immediately after the payment is completed, our platform will send an asynchronous request to the configured webhook to allow the payment details to be retrieved, so you know when exactly to start processing the customer's order.

3. The customer returns, and should be satisfied to see that the order was paid and is now being processed.

Find our full documentation online on [docs.revolut.com](https://docs.revolut.com).

## Getting started ##

Initializing the Revolut API client, and setting your API key.

```php
$revolut = new \Revolut\Api\RevolutApiClient();
$revolut->setApiKey("test_dHar4XY7LxsDOtmnkVtjNVWXLSlXsM");
``` 

Creating a new payment.

```php
$payment = $revolut->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => "10.00"
    ],
    "description" => "My first API payment",
    "redirectUrl" => "https://webshop.example.org/order/12345/",
    "webhookUrl"  => "https://webshop.example.org/revolut-webhook/",
]);
```
_After creation, the payment id is available in the `$payment->id` property. You should store this id with your order._

After storing the payment id you can send the customer to the checkout using the `$payment->getCheckoutUrl()`.  

```php
header("Location: " . $payment->getCheckoutUrl(), true, 303);
```
_This header location should always be a GET, thus we enforce 303 http response code_

For a payment create example, see [Example - New Payment](https://github.com/revolut/revolut-api-php/blob/master/examples/payments/create-payment.php).

## Retrieving payments ##
We can use the `$payment->id` to retrieve a payment and check if the payment `isPaid`.

```php
$payment = $revolut->payments->get($payment->id);

if ($payment->isPaid())
{
    echo "Payment received.";
}
```

Or retrieve a collection of payments.

```php
$payments = $revolut->payments->page(); 
```

For an extensive example of listing payments with the details and status, see [Example - List Payments](https://github.com/revolut/revolut-api-php/blob/master/examples/payments/list-payments.php).

## Payment webhook ##

When the status of a payment changes the `webhookUrl` we specified in the creation of the payment will be called.  
There we can use the `id` from our POST parameters to check te status and act upon that, see [Example - Webhook](https://github.com/revolut/revolut-api-php/blob/master/examples/payments/webhook.php).


## Multicurrency ##
Since 2.0 it is now possible to create non-EUR payments for your customers.
A full list of available currencies can be found [in our documentation](https://docs.revolut.com/guides/multicurrency).

```php
$payment = $revolut->payments->create([
    "amount" => [
        "currency" => "USD",
        "value" => "10.00"
    ],
    "description" => "Order #12345",
    "redirectUrl" => "https://webshop.example.org/order/12345/",
    "webhookUrl"  => "https://webshop.example.org/revolut-webhook/",
]);
```
_After creation, the `settlementAmount` will contain the EUR amount that will be settled on your account._


### Fully integrated iDEAL payments ###

If you want to fully integrate iDEAL payments in your web site, some additional steps are required. First, you need to
retrieve the list of issuers (banks) that support iDEAL and have your customer pick the issuer he/she wants to use for
the payment.

Retrieve the iDEAL method and include the issuers

```php
$method = $revolut->methods->get(\Revolut\Api\Types\PaymentMethod::IDEAL, ["include" => "issuers"]);
```

_`$method->issuers` will be a list of objects. Use the property `$id` of this object in the
 API call, and the property `$name` for displaying the issuer to your customer. For a more in-depth example, see [Example - iDEAL payment](https://github.com/revolut/revolut-api-php/blob/master/examples/payments/create-ideal-payment.php)._

Create a payment with the selected issuer:

```php
$payment = $revolut->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => "10.00"
    ],
    "description" => "My first API payment",
    "redirectUrl" => "https://webshop.example.org/order/12345/",
    "webhookUrl"  => "https://webshop.example.org/revolut-webhook/",
    "method"      => \Revolut\Api\Types\PaymentMethod::IDEAL,
    "issuer"      => $selectedIssuerId, // e.g. "ideal_INGBNL2A"
]);
```

_The `_links` property of the `$payment` object will contain an object `checkout` with a `href` property, which is a URL that points directly to the online banking environment of the selected issuer.
A short way of retrieving this URL can be achieved by using the `$payment->getCheckoutUrl()`._

### Refunding payments ###

The API also supports refunding payments. Note that there is no confirmation and that all refunds are immediate and
definitive. refunds are supported for all methods except for paysafecard and gift cards.

```php
$payment = $revolut->payments->get($payment->id);

// Refund € 2 of this payment
$refund = $payment->refund([
    "amount" => [
        "currency" => "EUR",
        "value" => "2.00"
    ]
]);
```

For a working example, see [Example - Refund payment](https://github.com/revolut/revolut-api-php/blob/master/examples/payments/refund-payment.php).

## Enabling debug mode

When debugging it can be convenient to have the submitted request available on the `ApiException`.

In order to prevent leaking sensitive request data into your local application logs, debugging is disabled by default.

To enable debugging and inspect the request: 

```php
/** @var $revolut \Revolut\Api\RevolutApiClient */
$revolut->enableDebugging();

try {
    $revolut->payments->get('tr_12345678');
} catch (\Revolut\Api\Exceptions\ApiException $exception) {
    $request = $exception->getRequest();
}
```

If you're logging the `ApiException`, the request will also be logged. Make sure to not retain any sensitive data in
these logs and clean up after debugging.

To disable debugging again:

```php
/** @var $revolut \Revolut\Api\RevolutApiClient */
$revolut->disableDebugging();
```

Note that debugging is only available when using the default Guzzle http adapter (`Guzzle6And7RevolutHttpAdapter`).

## API documentation ##
If you wish to learn more about our API, please visit the [Revolut Developer Portal](https://www.revolut.com/developers). API Documentation is available in English.

## Want to help us make our API client even better? ##

Want to help us make our API client even better? We take [pull requests](https://github.com/revolut/revolut-api-php/pulls?utf8=%E2%9C%93&q=is%3Apr), sure. But how would you like to contribute to a technology oriented organization? Revolut is hiring developers and system engineers. [Check out our vacancies](https://jobs.revolut.com/) or [get in touch](mailto:personeel@revolut.com).

## License ##
[BSD (Berkeley Software Distribution) License](https://opensource.org/licenses/bsd-license.php).
Copyright (c) 2013-2018, Revolut B.V.

## Support ##
Contact: [www.revolut.com](https://www.revolut.com) — info@revolut.com — +31 20 820 20 70
