<?php

namespace Revolut\Payment\Model\Api;

use http\Env\Request as Req;
use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Model\Helper\ConstantValue;
use Revolut\Payment\Gateway\Config\Config as ConfigHelper;
use Magento\Framework\Exception\LocalizedException;
use Revolut\Payment\Gateway\Helper\AmountProvider;
use Revolut\Payment\Model\Helper\Api\RevolutOrderApi;
use Revolut\Payment\Model\RevolutOrderFactory;
use Revolut\Payment\Api\FastCheckoutManagementInterface;
use Revolut\Payment\Api\Data\AddressDataInterface;
use Revolut\Payment\Api\Data\AddressDataInterfaceFactory;
use Revolut\Payment\Model\Data\FastCheckoutResponseData;
use Revolut\Payment\Api\Data\FastCheckoutResponseDataInterface;
use Revolut\Payment\Api\Data\FastCheckoutResponseDataInterfaceFactory;
use Revolut\Payment\Model\Data\FastCheckoutParametersResponseData;
use Revolut\Payment\Api\Data\FastCheckoutParametersResponseDataInterface;
use Revolut\Payment\Api\Data\FastCheckoutParametersResponseDataInterfaceFactory;
use Revolut\Payment\Model\Data\ValidateOrderRequestData;
use Revolut\Payment\Api\Data\ValidateOrderRequestDataInterfaceFactory;
use Revolut\Payment\Model\Data\TotalsData;
use Revolut\Payment\Api\Data\TotalsDataInterfaceFactory;
use Revolut\Payment\Model\Data\ShippingOptionData;
use Revolut\Payment\Api\Data\ShippingOptionDataInterface;
use Revolut\Payment\Api\Data\ShippingOptionDataInterfaceFactory;
use Revolut\Payment\Model\RevolutPaymentInformationManagement;
use Revolut\Payment\Model\ResourceModel\RevolutOrder\Collection as RevolutOrderModelCollection;
use Revolut\Payment\Gateway\Config\RevolutPaymentRequest\Config as RevolutPaymentRequestConfig;
use Revolut\Payment\Gateway\Config\RevolutPay\Config as RevolutPayConfig;

use Magento\Framework\Registry;
use Magento\Quote\Model\Quote;
use Magento\Quote\Api\Data\CartInterface;
use Magento\Tax\Helper\Data as TaxHelper;
use Magento\Framework\Json\Helper\Data as JsonHelper;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\Customer\Model\Session as CustomerSession;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Webapi\Rest\Request;
use Magento\Quote\Api\ShipmentEstimationInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Checkout\Model\Cart;
use Revolut\Payment\Model\ChangeQuoteControl;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Quote\Api\CartRepositoryInterface;
use Magento\Directory\Model\CountryFactory;
use Magento\Checkout\Api\Data\ShippingInformationInterfaceFactory;
use Magento\Checkout\Api\ShippingInformationManagementInterface;
use Magento\Payment\Model\PaymentAdditionalInfo;

class FastCheckoutManagement implements FastCheckoutManagementInterface
{
    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var RevolutOrderApi
     */
    protected $revolutOrderApi;
    
    /**
     * @var AmountProvider
     */
    protected $amountProvider;
    
    /**
     * @var JsonHelper
     */
    protected $jsonHelper;

    /**
     * @var ConfigHelper
     */
    protected $configHelper;

    /**
     * @var CheckoutSession
     */
    protected $checkoutSession;

    /**
     * @var ProductFactory
     */
    protected $productFactory;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var RevolutOrderFactory
     */
    protected $revolutOrderFactory;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var TaxHelper
     */
    private $taxHelper;
    
    /**
     * @var ShipmentEstimationInterface
     */
    private $shipmentEstimation;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var CartRepositoryInterface
     */
    private $quoteRepository;

    /**
     * @var Cart
     */
    private $cart;

    /**
     * @var CustomerSession
     */
    private $customerSession;
    
    /**
     * @var ShippingInformationInterfaceFactory
     */
    private $shippingInformationFactory;

    /**
     * @var ShippingInformationManagementInterface
     */
    private $shippingInformationManagement;
    
    /**
     * @var RevolutPaymentRequestConfig
     */
    private $paymentRequestConfigHelper;
    
    /**
     * @var RevolutPayConfig
     */
    private $revolutPayConfigHelper;

    /**
     * @var ChangeQuoteControl
     */
    private $changeQuoteControl;

    /**
     * @var RevolutOrderModelCollection
     */
    protected $revolutOrderCollection;

    /**
     * @var RevolutPaymentInformationManagement
     */
    protected $revolutPaymentInformationManagement;
    
    /**
     * @var FastCheckoutResponseDataInterfaceFactory
     */
    protected $fastCheckoutResponseData;
    
    /**
     * @var TotalsDataInterfaceFactory
     */
    protected $totalsData;
    
    /**
     * @var ShippingOptionDataInterfaceFactory
     */
    protected $shippingOptionData;
    
    /**
     * @var FastCheckoutParametersResponseDataInterfaceFactory
     */
    protected $fastCheckoutParametersResponseData;
    
    /**
     * @var ValidateOrderRequestDataInterfaceFactory
     */
    protected $validateOrderRequestData;
    
    /**
     * @var AddressDataInterfaceFactory
     */
    protected $addressData;

    public function __construct(
        Registry $registry,
        JsonHelper $jsonHelper,
        ConfigHelper $configHelper,
        CheckoutSession $checkoutSession,
        ProductFactory $productFactory,
        Request $request,
        Logger $logger,
        RevolutOrderFactory $revolutOrderFactory,
        TaxHelper $taxHelper,
        Cart $cart,
        CustomerSession $customerSession,
        ShipmentEstimationInterface $shipmentEstimation,
        StoreManagerInterface  $storeManager,
        ProductRepositoryInterface $productRepository,
        CartRepositoryInterface $quoteRepository,
        ShippingInformationInterfaceFactory $shippingInformationFactory,
        ShippingInformationManagementInterface $shippingInformationManagement,
        AmountProvider $amountProvider,
        RevolutOrderApi $revolutOrderApi,
        RevolutPaymentRequestConfig $paymentRequestConfigHelper,
        RevolutPayConfig $revolutPayConfigHelper,
        ChangeQuoteControl $changeQuoteControl,
        RevolutOrderModelCollection $revolutOrderCollection,
        RevolutPaymentInformationManagement $revolutPaymentInformationManagement,
        FastCheckoutResponseDataInterfaceFactory $fastCheckoutResponseData,
        TotalsDataInterfaceFactory $totalsData,
        ShippingOptionDataInterfaceFactory $shippingOptionData,
        FastCheckoutParametersResponseDataInterfaceFactory $fastCheckoutParametersResponseData,
        ValidateOrderRequestDataInterfaceFactory $validateOrderRequestData,
        AddressDataInterfaceFactory $addressData
    ) {
        $this->registry = $registry;
        $this->jsonHelper = $jsonHelper;
        $this->configHelper = $configHelper;
        $this->checkoutSession = $checkoutSession;
        $this->productFactory = $productFactory;
        $this->revolutOrderFactory = $revolutOrderFactory;
        $this->logger = $logger;
        $this->taxHelper = $taxHelper;
        $this->cart = $cart;
        $this->request = $request;
        $this->customerSession = $customerSession;
        $this->shipmentEstimation = $shipmentEstimation;
        $this->storeManager = $storeManager;
        $this->productRepository = $productRepository;
        $this->quoteRepository = $quoteRepository;
        $this->shippingInformationFactory = $shippingInformationFactory;
        $this->shippingInformationManagement = $shippingInformationManagement;
        $this->amountProvider = $amountProvider;
        $this->revolutOrderApi = $revolutOrderApi;
        $this->paymentRequestConfigHelper = $paymentRequestConfigHelper;
        $this->revolutPayConfigHelper = $revolutPayConfigHelper;
        $this->changeQuoteControl = $changeQuoteControl;
        $this->revolutOrderCollection = $revolutOrderCollection;
        $this->revolutPaymentInformationManagement = $revolutPaymentInformationManagement;
        $this->fastCheckoutResponseData = $fastCheckoutResponseData;
        $this->totalsData = $totalsData;
        $this->shippingOptionData = $shippingOptionData;
        $this->fastCheckoutParametersResponseData = $fastCheckoutParametersResponseData;
        $this->validateOrderRequestData = $validateOrderRequestData;
        $this->addressData = $addressData;
    }

    /**
     * Get params
     *
     * @api
     * @param String $location
     * @return FastCheckoutParametersResponseDataInterface
     */
    public function getParams(String $location)
    {
        return $this->fastCheckoutParametersResponseData->create()
                ->setRevolutPaymentRequestThemeConfigs($this->getRevolutPaymentRequestThemeConfigs())
                ->setIsRevolutPaymentRequestActiveLocation($this->isRevolutPaymentRequestActiveLocation($location))
                ->setIsRevolutPayActiveLocation($this->isRevolutPayActiveLocation($location))
                ->setRevolutPayThemeConfigs($this->getRevolutPayThemeConfigs())
                ->setRevolutSdk($this->getRevolutSdk());
    }

    /**
     * Creates card for Express checkout
     *
     * @api
     * @param String $revolutPublicId
     * @param String $productForm
     * @param bool $revolutPayFastCheckout
     * @return FastCheckoutResponseDataInterface
     */
    public function addToCart(String $revolutPublicId, String $productForm, $revolutPayFastCheckout = false)
    {
        parse_str($productForm, $params);

        $productId = (int)$params['product'];
        $related = $params['related_product'];

        $quote = $this->cart->getQuote();

        try {
            $storeId = $this->storeManager->getStore()->getId();
            $product = $this->productRepository->getById($productId, false, $storeId);

            $isUpdated = false;
            foreach ($quote->getAllItems() as $item) {
                if ($item->getProductId() == $productId) {
                    $item = $this->cart->updateItem($item->getId(), $params);
                    if ($item->getHasError()) { // @phpstan-ignore-line
                        throw new LocalizedException(__($item->getMessage())); // @phpstan-ignore-line
                    }

                    $isUpdated = true;
                    break;
                }
            }

            if (!$isUpdated) {
                // @phpstan-ignore-next-line
                $item = $this->cart->addProduct($product, $params);
                if ($item->getHasError()) {
                    throw new LocalizedException(__($item->getMessage()));
                }

                if (!empty($related)) {
                    // @phpstan-ignore-next-line
                    $this->cart->addProductsByIds(explode(',', $related));
                }
            }

            $this->cart->save();

            $quote->setTotalsCollectedFlag(false);
            $quote->collectTotals();
            $quote->save();

            $amount = $quote->getGrandTotal();
            $currency = $quote->getQuoteCurrencyCode();

            $this->updateRevolutOrder($revolutPublicId, $amount, $currency, $quote, $revolutPayFastCheckout);

            if (empty($currency)) {
                $currency = $quote->getStore()->getCurrentCurrency()->getCode();
            }

            return $this->successResponse($amount, $currency);

        } catch (\Exception $e) {
            $this->logger->debug('An error occured while adding product to cart: ' . $e->getMessage());
            return $this->errorResponse($e->getMessage());
        }
    }
    
    /**
     * Handle address validation webhook callbacks
     *
     * @api
     * @param String $orderId
     * @param AddressDataInterface $addressData
     * @return FastCheckoutResponseDataInterface
     */
    public function addressValidationWebhook(String $orderId, AddressDataInterface $addressData)
    {
        try {
            $this->changeQuoteControl->setAllowed();
            $revolutOrder = $this->revolutOrderCollection->getOrderByRevolutOrderId($orderId)->getFirstItem();
            
            if (empty($revolutOrder->getPublicId())) {
                throw new \Exception("Order not found: " . $orderId);
            }

            $this->storeManager->setCurrentStore($revolutOrder->getStoreId());
            $this->storeManager->getStore()->setCurrentCurrencyCode($revolutOrder->getCurrency());
            $this->revolutPaymentInformationManagement->setCustomerAsLoggedIn($revolutOrder->getCustomerId());

            $quote = $this->quoteRepository->get($revolutOrder->getQuoteId());
            
            if ($quote->isVirtual()) {
                throw new \Exception("virtual orders are not supported");
            }

            $this->checkoutSession->replaceQuote($quote); // @phpstan-ignore-line

            return $this->loadShippingOptions($revolutOrder->getPublicId(), $addressData, $quote);
        } catch (\Exception $e) {
            $this->logger->debug('An error occured while validating shipping address: ' . $e->getMessage());
            return $this->errorResponse($e->getMessage());
        }
    }

    /**
     * Loads shipping options for selected address
     *
     * @api
     * @param String $revolutPublicId
     * @param AddressDataInterface $addressData
     * @param Object $quote
     * @return FastCheckoutResponseDataInterface
     */
    public function loadShippingOptions(String $revolutPublicId, AddressDataInterface $addressData, Object $quote = null)
    {
        try {
            if (!$quote) {
                $quote = $this->cart->getQuote();
            }
            
            $currency = $quote->getQuoteCurrencyCode();
            $rates = [];

            if ($quote->isVirtual()) {
                $currency = $quote->getQuoteCurrencyCode();
                $amount = $quote->getGrandTotal();

                $this->updateRevolutOrder($revolutPublicId, $amount, $currency, $quote);
                return $this->successResponse($quote->getGrandTotal(), $currency, $this->getDefaultShippingOptions());
            }

            $quote->getShippingAddress()->addData($addressData->getFormattedAddress());
            $rates = $this->shipmentEstimation->estimateByExtendedAddress($quote->getId(), $quote->getShippingAddress());

            $shouldInclTax = $this->shouldCartPriceInclTax($quote->getStore());

            $shippingOptions = [];

            foreach ($rates as $rate) {
                if ($rate->getErrorMessage()) {
                    continue;
                }
                $rate_amount = $shouldInclTax ? $rate->getPriceInclTax() : $rate->getPriceExclTax();
               
                $shippingOption = $this->shippingOptionData->create();
                $shippingOption->setId($rate->getCarrierCode() . '_' . $rate->getMethodCode());
                $shippingOption->setLabel(implode(' - ', [$rate->getCarrierTitle(), $rate->getMethodTitle()]));
                $shippingOption->setDetail($rate->getMethodTitle());
                $shippingOption->setAmount($this->amountProvider->convert($rate_amount, $currency));

                $shippingOptions[] = $shippingOption;
            }
            
            if (!empty($shippingOptions) && isset($shippingOptions[0])) {
                $this->setShippingOption($shippingOptions[0]->getId(), $revolutPublicId, $addressData, $quote);
            }

            $currency = $quote->getQuoteCurrencyCode();
            $amount = $this->cart->getQuote()->getGrandTotal();
            return $this->successResponse($amount, $currency, $shippingOptions);
        } catch (\Exception $e) {
            $this->logger->debug('An error occured while loading shipping options: ' . $e->getMessage());
            return $this->errorResponse('An error occured while loading shipping options');
        }
    }

    /**
     * Sets selected shipping option
     *
     * @api
     * @param String $selectedCarrierId
     * @param String $revolutPublicId
     * @param AddressDataInterface $addressData
     * @param Object $quote
     * @return FastCheckoutResponseDataInterface
     */
    public function setShippingOption(String $selectedCarrierId, String $revolutPublicId, AddressDataInterface $addressData, Object $quote = null)
    {
        try {
            if (!$quote) {
                $quote = $this->cart->getQuote();
            }

            $this->setShippingMethod($selectedCarrierId, $revolutPublicId, $addressData, $quote);

            $currency = $quote->getQuoteCurrencyCode();
            $amount = $quote->getGrandTotal();
            $this->updateRevolutOrder($revolutPublicId, $amount, $currency, $quote);
            return $this->successResponse($amount, $currency);
        } catch (\Exception $e) {
            $this->logger->debug('An error occured while setting shipping options: ' . $e->getMessage());
            return $this->errorResponse('An error occured while setting shipping options.');
        }
    }
    
    /**
     * Sets selected shipping method
     *
     * @api
     * @param String $selectedCarrierId
     * @param String $revolutPublicId
     * @param AddressDataInterface $addressData
     * @param Object $quote
     * @return void
     */
    public function setShippingMethod(String $selectedCarrierId, String $revolutPublicId, AddressDataInterface $addressData, Object $quote)
    {
        if ($quote->isVirtual()) {
            return;
        }

        $shippingAddress = $quote->getShippingAddress()->addData($addressData->getFormattedAddress());

        $shippingAddress->setShippingMethod($selectedCarrierId)->setCollectShippingRates(true)->collectShippingRates();

        $parts = explode('_', $selectedCarrierId);
        $carrierCode = array_shift($parts);
        $methodCode = implode("_", $parts);
                
        $shippingInformation = $this->shippingInformationFactory->create();
        $shippingInformation->setShippingAddress($shippingAddress)->setShippingCarrierCode($carrierCode)->setShippingMethodCode($methodCode);
        $this->shippingInformationManagement->saveAddressInformation($quote->getId(), $shippingInformation); // @phpstan-ignore-line

        $quote->setTotalsCollectedFlag(false);
        $quote->collectTotals();
    }
    
    /**
     * Validate Order order
     *
     * @api
     * @param String $publicId
     * @param ValidateOrderRequestData $address
     * @param String $carrierId
     * @return FastCheckoutResponseDataInterface
     */
    public function validateOrder(String $publicId, ValidateOrderRequestData $address = null, String $carrierId = null)
    {
        try {
            $quote = $this->cart->getQuote();

            $paymentMethod = $address ? \Revolut\Payment\Model\Ui\ConfigProvider::REVOLUT_PAYMENT_REQUEST_CODE
                                      : \Revolut\Payment\Model\Ui\ConfigProvider::REVOLUT_PAY_CODE;

            if (!$address) {
                $revolutOrderFactory = $this->revolutOrderFactory->create();
                $revolutOrder = $revolutOrderFactory->load($publicId, 'public_id'); // @phpstan-ignore-line
                
                if (empty($revolutOrder->getRevolutOrderId())) {
                    throw new LocalizedException(__('Could not find Revolut Order ID'));
                }
                
                $order = $this->revolutOrderApi->retrieve($revolutOrder->getRevolutOrderId(), $revolutOrder->getStoreId());

                $carrierId = $order['delivery_method']['ref'];
                $shippingAddress = $order['shipping_address'];
                                
                $addressData = $this->addressData->create()
                                ->setRecipient($order['full_name'])
                                ->setCity($shippingAddress['city'])
                                ->setCountry($shippingAddress['country_code'])
                                ->setPostcode($shippingAddress['postcode'])
                                ->setPhone($order['phone'])
                                ->setAddress($shippingAddress['street_line_1']);

                $address = $this->validateOrderRequestData->create()
                                            ->setEmail($order['email'])
                                            ->setShippingAddress($addressData)
                                            ->setBillingAddress($addressData);

                $this->setShippingMethod($carrierId, $publicId, $addressData, $quote);
            }

            $email = $address->getEmail();
            $billingAddress = $address->getBillingAddress()->setEmail($email)->getFormattedAddress();
            $shippingAddress = $address->getShippingAddress()->setEmail($email)->getFormattedAddress();

            if (empty($billingAddress['telephone']) && !empty($shippingAddress['telephone'])) {
                $billingAddress['telephone'] = $shippingAddress['telephone'];
            }
            
            if (empty($shippingAddress['telephone']) && !empty($billingAddress['telephone'])) {
                $shippingAddress['telephone'] = $billingAddress['telephone'];
            }
            
            $quote->setIsWalletButton(true);
            $quote->getBillingAddress()->addData($billingAddress);

            if (!$quote->isVirtual()) {
                $shipping = $quote->getShippingAddress()->addData($shippingAddress);
                $shipping->setShippingMethod($carrierId)->setCollectShippingRates(true);
            }

            $quote->setTotalsCollectedFlag(false);
            $quote->collectTotals();

            $this->storeManager->setCurrentStore($quote->getStoreId());

            if (!$this->customerSession->isLoggedIn()) {
                $quote->setCheckoutMethod(\Magento\Checkout\Model\Type\Onepage::METHOD_GUEST)
                    ->setCustomerId(0)
                    ->setCustomerEmail($quote->getBillingAddress()->getEmail())
                    ->setCustomerIsGuest(true)
                    ->setCustomerGroupId(\Magento\Customer\Api\Data\GroupInterface::NOT_LOGGED_IN_ID);
            } else {
                $quote->setCheckoutMethod(\Magento\Checkout\Model\Type\Onepage::METHOD_CUSTOMER);
            }

            $quote->getPayment()->importData(
                ['method' => $paymentMethod,
                'additional_data' => [
                    'publicId' => $publicId
                ]]
            );

            $this->changeQuoteControl->setAllowed();
            $this->quoteRepository->save($quote);

            $currency = $quote->getQuoteCurrencyCode();
            $amount = $quote->getGrandTotal();
            return $this->successResponse($amount, $currency);
        } catch (\Exception $e) {
            $this->logger->debug('An error occured during order validation: order token - ' . $publicId . ' - '  . $e->getMessage());
            return $this->errorResponse('An error occured during order validation.');
        }
    }

    /**
     * @param string|mixed $publicId
     * @param float $amount
     * @param string $currency
     * @param object $quote
     * @param bool $isRevolutPay
     * @return array
     */
    public function updateRevolutOrder($publicId, $amount, $currency, $quote, $isRevolutPay = false)
    {
        $revolutOrderFactory = $this->revolutOrderFactory->create();
        $revolutOrder = $revolutOrderFactory->load($publicId, 'public_id'); // @phpstan-ignore-line

        $revolutOrderId = $revolutOrder->getRevolutOrderId();

        if (empty($revolutOrderId)) {
            throw new LocalizedException(__('Could not find Revolut Order ID'));
        }

        if ($isRevolutPay) {
            $revolutOrderFromApi = $this->revolutOrderApi->retrieve($revolutOrderId, $revolutOrder->getStoreId());
            $deliveryMethodAmount = isset($revolutOrderFromApi['delivery_method']['amount']) ?
                                    (int)$revolutOrderFromApi['delivery_method']['amount'] : 0;

            $subTotalAmount = $quote->getGrandTotal() - $quote->getShippingAddress()->getShippingAmount();
            $amount = $this->amountProvider->convert($subTotalAmount, $currency) + $deliveryMethodAmount;
        } else {
            $amount = $this->amountProvider->convert($amount, $currency);
        }
        
        // update revolut order amount on Revolut Api
        $orderData = $this->revolutOrderApi->update($revolutOrderId, ['amount' => $amount, 'currency' => $currency], $quote->getStoreId());

        if (!isset($orderData['public_id'])) {
            throw new LocalizedException(__('Can not update Revolut Order'));
        }
        $this->logger->debug('updateRevolutOrder: ' . $orderData['order_amount']['value']);

        //update revolut order amount on Magento DB
        $revolutOrderFactory->setOrderAmount($orderData['order_amount']['value']);
        $revolutOrderFactory->save();
        
        return $orderData;
    }

    /**
     * @return ShippingOptionDataInterface[]
     */
    public function getDefaultShippingOptions()
    {
        $shippingOption = $this->shippingOptionData->create();
        $shippingOption->setId("free_shipping");
        $shippingOption->setLabel("-");
        $shippingOption->setDetail("");
        $shippingOption->setAmount(0);
        return [$shippingOption];
    }
    
    /**
     * @param String $errorMsg
     * @return FastCheckoutResponseDataInterface
     */
    public function errorResponse($errorMsg)
    {
        $response = $this->fastCheckoutResponseData->create();
        $response->setSuccess(false);
        $response->setMessage($errorMsg);
        return $response;
    }
    
    /**
     * @param float $amount
     * @param String $currency
     * @param ShippingOptionDataInterface[] $shippingOptions
     * @return FastCheckoutResponseDataInterface
     */
    public function successResponse($amount, $currency, $shippingOptions = [])
    {
        $response = $this->fastCheckoutResponseData->create();
        $response->setSuccess(true);
        $response->setCurrency($currency);
        $response->setDeliveryMethods($shippingOptions);

        $totalAmount = $this->totalsData->create();
        $totalAmount->setAmount($this->amountProvider->convert($amount, $currency));
        $response->setTotal($totalAmount);
        return $response;
    }

    /**
     * @param \Magento\Store\Model\Store $store
     * @return bool
     */
    public function shouldCartPriceInclTax($store = null)
    {
        if ($this->taxHelper->displayCartBothPrices($store)) {
            return true;
        } elseif ($this->taxHelper->displayCartPriceInclTax($store)) {
            return true;
        }

        return false;
    }

     /**
      * @return mixed
      */
    public function getRevolutPaymentRequestThemeConfigs()
    {
        return \json_encode($this->paymentRequestConfigHelper->getPaymentRequestButtonStyleConfigs());
    }

     /**
      * @return mixed
      */
    public function getRevolutPayThemeConfigs()
    {
        $storeId = $this->storeManager->getStore()->getId();
        return \json_encode($this->revolutPayConfigHelper->getRevolutPayButtonStyleConfigs($storeId));
    }
  
    /**
     * @return string
     */
    public function getRevolutSdk()
    {
        $mode = $this->configHelper->getModeName($this->storeManager->getStore()->getId());
        return ConstantValue::REVOLUT_SDK_URLS[$mode];
    }
  
      /**
       * @return int
       */
    public function getProductId()
    {
        $product = $this->registry->registry('product');
        if ($product) {
            return $product->getId();
        }
        return 0;
    }
  
    /**
     * @param string $location
     * @return bool
     */
    public function isRevolutPaymentRequestActiveLocation($location)
    {
        $storeId = $this->storeManager->getStore()->getId();
        return $this->configHelper->getWebhookSetupResult($storeId) &&
               $this->configHelper->isLiveMode($storeId) &&
               $this->paymentRequestConfigHelper->isActiveLocation($location, $storeId);
    }
    
    /**
     * @param string $location
     * @return bool
     */
    public function isRevolutPayActiveLocation($location)
    {
        $storeId = $this->storeManager->getStore()->getId();
        return $this->configHelper->getWebhookSetupResult($storeId) &&
               $this->revolutPayConfigHelper->isActiveLocation($location, $storeId);
    }
}
