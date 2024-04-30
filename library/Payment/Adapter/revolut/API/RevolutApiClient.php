<?php

namespace Revolut\Api;

use Revolut\Api\Endpoints\BalanceEndpoint;
use Revolut\Api\Endpoints\BalanceReportEndpoint;
use Revolut\Api\Endpoints\BalanceTransactionEndpoint;
use Revolut\Api\Endpoints\ChargebackEndpoint;
use Revolut\Api\Endpoints\ClientEndpoint;
use Revolut\Api\Endpoints\CustomerEndpoint;
use Revolut\Api\Endpoints\CustomerPaymentsEndpoint;
use Revolut\Api\Endpoints\InvoiceEndpoint;
use Revolut\Api\Endpoints\MandateEndpoint;
use Revolut\Api\Endpoints\MethodEndpoint;
use Revolut\Api\Endpoints\OnboardingEndpoint;
use Revolut\Api\Endpoints\OrderEndpoint;
use Revolut\Api\Endpoints\OrderLineEndpoint;
use Revolut\Api\Endpoints\OrderPaymentEndpoint;
use Revolut\Api\Endpoints\OrderRefundEndpoint;
use Revolut\Api\Endpoints\OrganizationEndpoint;
use Revolut\Api\Endpoints\OrganizationPartnerEndpoint;
use Revolut\Api\Endpoints\PaymentCaptureEndpoint;
use Revolut\Api\Endpoints\PaymentChargebackEndpoint;
use Revolut\Api\Endpoints\PaymentEndpoint;
use Revolut\Api\Endpoints\PaymentLinkEndpoint;
use Revolut\Api\Endpoints\PaymentRefundEndpoint;
use Revolut\Api\Endpoints\PaymentRouteEndpoint;
use Revolut\Api\Endpoints\PermissionEndpoint;
use Revolut\Api\Endpoints\ProfileEndpoint;
use Revolut\Api\Endpoints\ProfileMethodEndpoint;
use Revolut\Api\Endpoints\RefundEndpoint;
use Revolut\Api\Endpoints\SettlementPaymentEndpoint;
use Revolut\Api\Endpoints\SettlementsEndpoint;
use Revolut\Api\Endpoints\ShipmentEndpoint;
use Revolut\Api\Endpoints\SubscriptionEndpoint;
use Revolut\Api\Endpoints\TerminalEndpoint;
use Revolut\Api\Endpoints\WalletEndpoint;
use Revolut\Api\Exceptions\ApiException;
use Revolut\Api\Exceptions\HttpAdapterDoesNotSupportDebuggingException;
use Revolut\Api\Exceptions\IncompatiblePlatform;
use Revolut\Api\HttpAdapter\RevolutHttpAdapterPicker;
use Revolut\Api\Idempotency\DefaultIdempotencyKeyGenerator;

class RevolutApiClient
{
    /**
     * Version of our client.
     */
    public const CLIENT_VERSION = "2.56.0";

    /**
     * Endpoint of the remote API.
     */
    public const API_ENDPOINT = "https://api.revolut.com";

    /**
     * Version of the remote API.
     */
    public const API_VERSION = "v2";

    /**
     * HTTP Methods
     */
    public const HTTP_GET = "GET";
    public const HTTP_POST = "POST";
    public const HTTP_DELETE = "DELETE";
    public const HTTP_PATCH = "PATCH";

    /**
     * @var \Revolut\Api\HttpAdapter\RevolutHttpAdapterInterface
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $apiEndpoint = self::API_ENDPOINT;

    /**
     * RESTful Payments resource.
     *
     * @var PaymentEndpoint
     */
    public $payments;

    /**
     * RESTful Methods resource.
     *
     * @var MethodEndpoint
     */
    public $methods;

    /**
     * @var ProfileMethodEndpoint
     */
    public $profileMethods;

    /**
     * RESTful Customers resource.
     *
     * @var CustomerEndpoint
     */
    public $customers;

    /**
     * RESTful Customer payments resource.
     *
     * @var CustomerPaymentsEndpoint
     */
    public $customerPayments;

    /**
     * RESTful Settlement resource.
     *
     * @var SettlementsEndpoint
     */
    public $settlements;

    /**
     * RESTful Settlement payment resource.
     *
     * @var \Revolut\Api\Endpoints\SettlementPaymentEndpoint
     */
    public $settlementPayments;

    /**
     * RESTful Subscription resource.
     *
     * @var SubscriptionEndpoint
     */
    public $subscriptions;

    /**
     * RESTful Mandate resource.
     *
     * @var MandateEndpoint
     */
    public $mandates;

    /**
     * RESTful Profile resource.
     *
     * @var ProfileEndpoint
     */
    public $profiles;

    /**
     * RESTful Organization resource.
     *
     * @var OrganizationEndpoint
     */
    public $organizations;

    /**
     * RESTful Permission resource.
     *
     * @var PermissionEndpoint
     */
    public $permissions;

    /**
     * RESTful Invoice resource.
     *
     * @var InvoiceEndpoint
     */
    public $invoices;

    /**
     * RESTful Balance resource.
     *
     * @var BalanceEndpoint
     */
    public $balances;

    /**
     * @var BalanceTransactionEndpoint
     */
    public $balanceTransactions;

    /**
     * @var BalanceReportEndpoint
     */
    public $balanceReports;

    /**
     * RESTful Onboarding resource.
     *
     * @var OnboardingEndpoint
     */
    public $onboarding;

    /**
     * RESTful Order resource.
     *
     * @var OrderEndpoint
     */
    public $orders;

    /**
     * RESTful OrderLine resource.
     *
     * @var OrderLineEndpoint
     */
    public $orderLines;

    /**
     * RESTful OrderPayment resource.
     *
     * @var OrderPaymentEndpoint
     */
    public $orderPayments;

    /**
     * RESTful Shipment resource.
     *
     * @var ShipmentEndpoint
     */
    public $shipments;

    /**
     * RESTful Refunds resource.
     *
     * @var RefundEndpoint
     */
    public $refunds;

    /**
     * RESTful Payment Refunds resource.
     *
     * @var PaymentRefundEndpoint
     */
    public $paymentRefunds;

    /**
     * RESTful Payment Route resource.
     *
     * @var PaymentRouteEndpoint
     */
    public $paymentRoutes;

    /**
     * RESTful Payment Captures resource.
     *
     * @var PaymentCaptureEndpoint
     */
    public $paymentCaptures;

    /**
     * RESTful Chargebacks resource.
     *
     * @var ChargebackEndpoint
     */
    public $chargebacks;

    /**
     * RESTful Payment Chargebacks resource.
     *
     * @var PaymentChargebackEndpoint
     */
    public $paymentChargebacks;

    /**
     * RESTful Order Refunds resource.
     *
     * @var OrderRefundEndpoint
     */
    public $orderRefunds;

    /**
     * Manages Payment Links requests
     *
     * @var PaymentLinkEndpoint
     */
    public $paymentLinks;

    /**
     * RESTful Terminal resource.
     *
     * @var TerminalEndpoint
     */
    public $terminals;

    /**
     * RESTful Onboarding resource.
     *
     * @var OrganizationPartnerEndpoint
     */
    public $organizationPartners;

    /**
     * Manages Wallet requests
     *
     * @var WalletEndpoint
     */
    public $wallets;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * True if an OAuth access token is set as API key.
     *
     * @var bool
     */
    protected $oauthAccess;

    /**
     * A unique string ensuring a request to a mutating Revolut endpoint is processed only once.
     * This key resets to null after each request.
     *
     * @var string|null
     */
    protected $idempotencyKey = null;

    /**
     * @var \Revolut\Api\Idempotency\IdempotencyKeyGeneratorContract|null
     */
    protected $idempotencyKeyGenerator;

    /**
     * @var array
     */
    protected $versionStrings = [];

    /**
     * RESTful Client resource.
     *
     * @var ClientEndpoint
     */
    public $clients;

    /**
     * @param \GuzzleHttp\ClientInterface|\Revolut\Api\HttpAdapter\RevolutHttpAdapterInterface|null $httpClient
     * @param \Revolut\Api\HttpAdapter\RevolutHttpAdapterPickerInterface|null $httpAdapterPicker,
     * @param \Revolut\Api\Idempotency\IdempotencyKeyGeneratorContract $idempotencyKeyGenerator,
     * @throws \Revolut\Api\Exceptions\IncompatiblePlatform|\Revolut\Api\Exceptions\UnrecognizedClientException
     */
    public function __construct($httpClient = null, $httpAdapterPicker = null, $idempotencyKeyGenerator = null)
    {
        $httpAdapterPicker = $httpAdapterPicker ?: new RevolutHttpAdapterPicker;
        $this->httpClient = $httpAdapterPicker->pickHttpAdapter($httpClient);

        $compatibilityChecker = new CompatibilityChecker;
        $compatibilityChecker->checkCompatibility();

        $this->initializeEndpoints();
        $this->initializeVersionStrings();
        $this->initializeIdempotencyKeyGenerator($idempotencyKeyGenerator);
    }

    public function initializeEndpoints()
    {
        $this->payments = new PaymentEndpoint($this);
        $this->methods = new MethodEndpoint($this);
        $this->profileMethods = new ProfileMethodEndpoint($this);
        $this->customers = new CustomerEndpoint($this);
        $this->settlements = new SettlementsEndpoint($this);
        $this->settlementPayments = new SettlementPaymentEndpoint($this);
        $this->subscriptions = new SubscriptionEndpoint($this);
        $this->customerPayments = new CustomerPaymentsEndpoint($this);
        $this->mandates = new MandateEndpoint($this);
        $this->balances = new BalanceEndpoint($this);
        $this->balanceTransactions = new BalanceTransactionEndpoint($this);
        $this->balanceReports = new BalanceReportEndpoint($this);
        $this->invoices = new InvoiceEndpoint($this);
        $this->permissions = new PermissionEndpoint($this);
        $this->profiles = new ProfileEndpoint($this);
        $this->onboarding = new OnboardingEndpoint($this);
        $this->organizations = new OrganizationEndpoint($this);
        $this->orders = new OrderEndpoint($this);
        $this->orderLines = new OrderLineEndpoint($this);
        $this->orderPayments = new OrderPaymentEndpoint($this);
        $this->orderRefunds = new OrderRefundEndpoint($this);
        $this->shipments = new ShipmentEndpoint($this);
        $this->refunds = new RefundEndpoint($this);
        $this->paymentRefunds = new PaymentRefundEndpoint($this);
        $this->paymentCaptures = new PaymentCaptureEndpoint($this);
        $this->paymentRoutes = new PaymentRouteEndpoint($this);
        $this->chargebacks = new ChargebackEndpoint($this);
        $this->paymentChargebacks = new PaymentChargebackEndpoint($this);
        $this->wallets = new WalletEndpoint($this);
        $this->paymentLinks = new PaymentLinkEndpoint($this);
        $this->terminals = new TerminalEndpoint($this);
        $this->organizationPartners = new OrganizationPartnerEndpoint($this);
        $this->clients = new ClientEndpoint($this);
    }

    protected function initializeVersionStrings()
    {
        $this->addVersionString("Revolut/" . self::CLIENT_VERSION);
        $this->addVersionString("PHP/" . phpversion());

        $httpClientVersionString = $this->httpClient->versionString();
        if ($httpClientVersionString) {
            $this->addVersionString($httpClientVersionString);
        }
    }

    /**
     * @param \Revolut\Api\Idempotency\IdempotencyKeyGeneratorContract $generator
     * @return void
     */
    protected function initializeIdempotencyKeyGenerator($generator)
    {
        $this->idempotencyKeyGenerator = $generator ? $generator : new DefaultIdempotencyKeyGenerator;
    }

    /**
     * @param string $url
     *
     * @return RevolutApiClient
     */
    public function setApiEndpoint($url)
    {
        $this->apiEndpoint = rtrim(trim($url), '/');

        return $this;
    }

    /**
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->apiEndpoint;
    }

    /**
     * @return array
     */
    public function getVersionStrings()
    {
        return $this->versionStrings;
    }

    /**
     * @param string $apiKey The Revolut API key, starting with 'test_' or 'live_'
     *
     * @return RevolutApiClient
     * @throws ApiException
     */
    public function setApiKey($apiKey)
    {
        $apiKey = trim($apiKey);

        if (! preg_match('/^(live|test)_\w{30,}$/', $apiKey)) {
            throw new ApiException("Invalid API key: '{$apiKey}'. An API key must start with 'test_' or 'live_' and must be at least 30 characters long.");
        }

        $this->apiKey = $apiKey;
        $this->oauthAccess = false;

        return $this;
    }

    /**
     * @param string $accessToken OAuth access token, starting with 'access_'
     *
     * @return RevolutApiClient
     * @throws ApiException
     */
    public function setAccessToken($accessToken)
    {
        $accessToken = trim($accessToken);

        if (! preg_match('/^access_\w+$/', $accessToken)) {
            throw new ApiException("Invalid OAuth access token: '{$accessToken}'. An access token must start with 'access_'.");
        }

        $this->apiKey = $accessToken;
        $this->oauthAccess = true;

        return $this;
    }

    /**
     * Returns null if no API key has been set yet.
     *
     * @return bool|null
     */
    public function usesOAuth()
    {
        return $this->oauthAccess;
    }

    /**
     * @param string $versionString
     *
     * @return RevolutApiClient
     */
    public function addVersionString($versionString)
    {
        $this->versionStrings[] = str_replace([" ", "\t", "\n", "\r"], '-', $versionString);

        return $this;
    }

    /**
     * Enable debugging mode. If debugging mode is enabled, the attempted request will be included in the ApiException.
     * By default, debugging is disabled to prevent leaking sensitive request data into exception logs.
     *
     * @throws \Revolut\Api\Exceptions\HttpAdapterDoesNotSupportDebuggingException
     */
    public function enableDebugging()
    {
        if (
            ! method_exists($this->httpClient, 'supportsDebugging')
            || ! $this->httpClient->supportsDebugging()
        ) {
            throw new HttpAdapterDoesNotSupportDebuggingException(
                "Debugging is not supported by " . get_class($this->httpClient) . "."
            );
        }

        $this->httpClient->enableDebugging();
    }

    /**
     * Disable debugging mode. If debugging mode is enabled, the attempted request will be included in the ApiException.
     * By default, debugging is disabled to prevent leaking sensitive request data into exception logs.
     *
     * @throws \Revolut\Api\Exceptions\HttpAdapterDoesNotSupportDebuggingException
     */
    public function disableDebugging()
    {
        if (
            ! method_exists($this->httpClient, 'supportsDebugging')
            || ! $this->httpClient->supportsDebugging()
        ) {
            throw new HttpAdapterDoesNotSupportDebuggingException(
                "Debugging is not supported by " . get_class($this->httpClient) . "."
            );
        }

        $this->httpClient->disableDebugging();
    }

    /**
     * Set the idempotency key used on the next request. The idempotency key is a unique string ensuring a request to a
     * mutating Revolut endpoint is processed only once. The idempotency key resets to null after each request. Using
     * the setIdempotencyKey method supersedes the IdempotencyKeyGenerator.
     *
     * @param $key
     * @return $this
     */
    public function setIdempotencyKey($key)
    {
        $this->idempotencyKey = $key;

        return $this;
    }

    /**
     * Retrieve the idempotency key. The idempotency key is a unique string ensuring a request to a
     * mutating Revolut endpoint is processed only once. Note that the idempotency key gets reset to null after each
     * request.
     *
     * @return string|null
     */
    public function getIdempotencyKey()
    {
        return $this->idempotencyKey;
    }

    /**
     * Reset the idempotency key. Note that the idempotency key automatically resets to null after each request.
     * @return $this
     */
    public function resetIdempotencyKey()
    {
        $this->idempotencyKey = null;

        return $this;
    }

    /**
     * @param \Revolut\Api\Idempotency\IdempotencyKeyGeneratorContract $generator
     * @return \Revolut\Api\RevolutApiClient
     */
    public function setIdempotencyKeyGenerator($generator)
    {
        $this->idempotencyKeyGenerator = $generator;

        return $this;
    }

    /**
     * @param \Revolut\Api\Idempotency\IdempotencyKeyGeneratorContract $generator
     * @return \Revolut\Api\RevolutApiClient
     */
    public function clearIdempotencyKeyGenerator($generator)
    {
        $this->idempotencyKeyGenerator = null;

        return $this;
    }

    /**
     * Perform a http call. This method is used by the resource specific classes. Please use the $payments property to
     * perform operations on payments.
     *
     * @param string $httpMethod
     * @param string $apiMethod
     * @param string|null $httpBody
     *
     * @return \stdClass
     * @throws ApiException
     *
     * @codeCoverageIgnore
     */
    public function performHttpCall($httpMethod, $apiMethod, $httpBody = null)
    {
        $url = $this->apiEndpoint . "/" . self::API_VERSION . "/" . $apiMethod;

        return $this->performHttpCallToFullUrl($httpMethod, $url, $httpBody);
    }

    /**
     * Perform a http call to a full url. This method is used by the resource specific classes.
     *
     * @see $payments
     * @see $isuers
     *
     * @param string $httpMethod
     * @param string $url
     * @param string|null $httpBody
     *
     * @return \stdClass|null
     * @throws ApiException
     *
     * @codeCoverageIgnore
     */
    public function performHttpCallToFullUrl($httpMethod, $url, $httpBody = null)
    {
        if (empty($this->apiKey)) {
            throw new ApiException("You have not set an API key or OAuth access token. Please use setApiKey() to set the API key.");
        }

        $userAgent = implode(' ', $this->versionStrings);

        if ($this->usesOAuth()) {
            $userAgent .= " OAuth/2.0";
        }

        $headers = [
            'Accept' => "application/json",
            'Authorization' => "Bearer {$this->apiKey}",
            'User-Agent' => $userAgent,
        ];

        if ($httpBody !== null) {
            $headers['Content-Type'] = "application/json";
        }

        if (function_exists("php_uname")) {
            $headers['X-Revolut-Client-Info'] = php_uname();
        }

        if (in_array($httpMethod, [self::HTTP_POST, self::HTTP_PATCH, self::HTTP_DELETE])) {
            if (! $this->idempotencyKey && $this->idempotencyKeyGenerator) {
                $headers['Idempotency-Key'] = $this->idempotencyKeyGenerator->generate();
            }

            if ($this->idempotencyKey) {
                $headers['Idempotency-Key'] = $this->idempotencyKey;
            } elseif ($this->idempotencyKeyGenerator) {
                $headers['Idempotency-Key'] = $this->idempotencyKeyGenerator->generate();
            }
        }

        $response = $this->httpClient->send($httpMethod, $url, $headers, $httpBody);

        $this->resetIdempotencyKey();

        return $response;
    }

    /**
     * Serialization can be used for caching. Of course doing so can be dangerous but some like to live dangerously.
     *
     * \serialize() should be called on the collections or object you want to cache.
     *
     * We don't need any property that can be set by the constructor, only properties that are set by setters.
     *
     * Note that the API key is not serialized, so you need to set the key again after unserializing if you want to do
     * more API calls.
     *
     * @deprecated
     * @return string[]
     */
    public function __sleep()
    {
        return ["apiEndpoint"];
    }

    /**
     * When unserializing a collection or a resource, this class should restore itself.
     *
     * Note that if you have set an HttpAdapter, this adapter is lost on wakeup and reset to the default one.
     *
     * @throws IncompatiblePlatform If suddenly unserialized on an incompatible platform.
     */
    public function __wakeup()
    {
        $this->__construct();
    }
}
