<?php


namespace Revolut\Payment\Controller\Adminhtml\Webhook;

use Magento\Backend\App\Action;
use Magento\Framework\UrlInterface;
use Magento\Framework\Json\Helper\Data;
use Magento\Backend\App\Action\Context;
use Magento\Store\Model\StoreManagerInterface;


use Revolut\Payment\Model\Helper\ConstantValue;
use Revolut\Payment\Model\Helper\Api\RevolutApi;
use Revolut\Payment\Model\Helper\Api\RevolutWebhookApi;
use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Gateway\Config\Config;

class Setup extends Action
{
    /**
     * @var Data
     */
    protected $jsonHelper;

    /**
     * @var Logger
     */
    protected $logger;
    
    /**
     * @var RevolutWebhookApi
     */
    protected $webhookApi;
    
    /**
     * @var RevolutApi
     */
    protected $revolutApi;
    
    /**
     * @var Config
     */
    protected $config;
    
    /**
     * @var UrlInterface
     */
    protected $urlHelper;
    
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * Constructor
     *
     * @param Context $context
     * @param Data $jsonHelper
     * @param Config $config
     * @param Logger $logger
     * @param UrlInterface $urlHelper
     * @param StoreManagerInterface $storeManager
     * @param RevolutApi $revolutApi
     * @param RevolutWebhookApi $webhookApi
     */
    public function __construct(
        Context $context,
        Data $jsonHelper,
        Config $config,
        Logger $logger,
        UrlInterface $urlHelper,
        StoreManagerInterface $storeManager,
        RevolutApi $revolutApi,
        RevolutWebhookApi $webhookApi
    ) {
        $this->jsonHelper = $jsonHelper;
        $this->logger = $logger;
        $this->urlHelper = $urlHelper;
        $this->storeManager = $storeManager;
        $this->config = $config;
        $this->webhookApi = $webhookApi;
        $this->revolutApi = $revolutApi;
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        try {
            $addressValidationWebhookSetup = $this->getRequest()->getParam('address-validation');

            $stores = $this->storeManager->getStores();
            $result = [];
            
            foreach ($stores as $store) {
                if (empty($store->getId())) {
                    continue;
                }

                if ($addressValidationWebhookSetup) {
                    $result[] = $this->addressValidationWebhookSetup($store);
                    continue;
                }

                $result[] = $this->webhookSetup($store->getId(), $store->getCode());
            }

            return $this->jsonResponse($result);
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage());
            return $this->jsonResponse([['result' => false, 'msg' =>'']]);
        }
    }

    /**
     * @param object $store
     *
     * @return array
     */
    public function addressValidationWebhookSetup($store)
    {
        try {
            $storeId = $store->getId();
            $storeCode = $store->getCode();

            if (!$this->config->isApiKeyConfigured($storeId)) {
                return ['result' => false, 'storeCode' => $storeCode, 'showError' => false];
            }

            $storePlainDomain = parse_url($this->urlHelper->getBaseUrl());
            $storePlainDomain = !empty($storePlainDomain['host']) ? $storePlainDomain['host']: '';

            $webhookUrl = $this->urlHelper->getBaseUrl() . ConstantValue::MAGE_URI_ADDRESS_VALIDATION_WEBHOOK;
            
            $locationId = $this->setupLocation($store);

            if ($this->config->getAddressValidationWebhookSetupUrl($locationId, $storeId) === $webhookUrl) {
                $this->config->saveAddressValidationWebhookSetupResult(1, $storeId);
                $this->logger->debug('Address Validation webhook url exist storeId: ' . $storeId . ' storeCode: ' . $storeCode . ' url: ' . $webhookUrl);
                return ['result' => true, 'storeCode' => $storeCode];
            }

            $result = $this->revolutApi->registerAddressValidationWebhook($storeId, [
                'url' => $webhookUrl,
                'event_type' => 'fast_checkout.validate_address',
                'location_id'=> $locationId,
            ]);
            
            if (empty($result['signing_key'])) {
                throw new \Exception('Can not setup address validation webhook.');
            }

            $this->config->saveAddressValidationWebhookSetupResult(1, $storeId);
            $this->config->saveAddressValidationWebhookSetupUrl($webhookUrl, $locationId, $storeId);
            $this->config->saveLocationSetupId($locationId, $storeId);
            $this->config->saveAddressValidationWebhookSetupSigningKey($result['signing_key'], $storeId);
            $this->logger->debug('Address Validation webhook url registered storeId: ' . $storeId . ' storeCode: ' . $storeCode . ' url: ' . $webhookUrl);
            return ['result' => true, 'storeCode' => $storeCode];
        } catch (\Exception $e) {
            $this->logger->debug('Address Validation webhook setup error storeId: ' . $store->getId() . ' storeCode: ' . $store->getCode() . ' - ' . $e->getMessage());
            $this->config->saveAddressValidationWebhookSetupResult(0, $store->getId());
            return ['result' => false, 'storeCode' => $store->getCode(), 'msg' => $e->getMessage(), 'showError' => true];
        }
    }

    /**
     * @param object $store
     *
     * @return string
     */
    public function setupLocation($store)
    {
        $storeId = $store->getId();
        $storeCode = $store->getCode();

        $storeBaseUrl = $this->urlHelper->getBaseUrl();
        $storeParsedUrl = parse_url($storeBaseUrl);

        $domain = !empty($storeParsedUrl['host']) ? $storeParsedUrl['host']: '';
            
        $locations = $this->revolutApi->getLocations($storeId);
        
        if (! empty($locations)) {
            foreach ($locations as $location) {
                if (isset($location['name']) && $location['name'] === $domain && ! empty($location['id'])) {
                    return $location['id'];
                }
            }
        }

        $location = $this->revolutApi->createLocation($storeId, [
            'name' => $domain,
            'type' => 'online',
            'details' => [
                'domain' => $storeBaseUrl,
            ],
        ]);

        if (! isset($location['id']) || empty($location['id'])) {
            throw new \Exception('Can not create location object.');
        }

        return $location['id'];
    }

    /**
     * @param int $storeId
     * @param string $storeCode
     *
     * @return array
     */
    public function webhookSetup($storeId, $storeCode)
    {
        try {
            if (!$this->config->isApiKeyConfigured($storeId)) {
                return ['result' => false, 'storeCode' => $storeCode, 'showError' => false];
            }

            $webhookUrl = $this->urlHelper->getBaseUrl() . ConstantValue::MAGE_URI_WEBHOOK;
            $webHookList = $this->webhookApi->list($storeId);

            if (in_array($webhookUrl, array_column($webHookList, 'url'))) {
                foreach ($webHookList as $webhook) {
                    if (isset($webhook['url'])
                        && isset($webhook['id'])
                        && !empty($webhook['id'])
                        && isset($webhook['events'])
                        && is_array($webhook['events'])
                        && $webhook['url'] == $webhookUrl
                        && !in_array('ORDER_AUTHORISED', $webhook['events'])
                    ) {
                        $updateResult = $this->webhookApi->update($webhookUrl, $webhook['id'], $storeId);
                        
                        if (!isset($updateResult['id'])) {
                            throw new \Exception("Can not update webhook events: " . \json_encode($updateResult));
                        }

                        $this->logger->debug('updated webhook events: ' . $updateResult['id']);
                    }
                }

                $this->config->saveWebhookSetupResult(1, $storeId);
                $this->logger->debug('webhook url exist storeId: ' . $storeId . ' storeCode: ' . $storeCode . ' url: ' . $webhookUrl);
                return ['result' => true, 'storeCode' => $storeCode];
            }

            $result = $this->webhookApi->set($webhookUrl, $storeId);
            
            if (!isset($result['id'])) {
                throw new \Exception("Can not setup webhook url: " . \json_encode($result));
            }

            $this->logger->debug('webhook setup storeId: ' . $storeId . ' storeCode - ' . $storeCode . ' - url -' . $webhookUrl);
            $this->config->saveWebhookSetupResult(1, $storeId);
            return ['result' => true, 'storeCode' => $storeCode];
        } catch (\Exception $e) {
            $this->logger->debug('webhookSetup error storeId: ' . $storeId . ' storeCode: ' . $storeCode . ' - ' . $e->getMessage());
            $this->config->saveWebhookSetupResult(0, $storeId);
            return ['result' => false, 'storeCode' => $storeCode, 'msg' => $e->getMessage(), 'showError' => true];
        }
    }

    /**
     * Create json response
     *
     * @param  array $response
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function jsonResponse($response)
    {
        return $this->getResponse()->representJson(
            $this->jsonHelper->jsonEncode($response)
        );
    }
}
