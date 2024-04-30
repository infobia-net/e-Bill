<?php

namespace Revolut\Payment\Model\Helper\Api;

use Revolut\Payment\Model\Helper\ConstantValue;

class RevolutOrderApi extends RevolutApi
{
     /**
      * Create Order via API
      *
      * @param array $params
      * @param int $storeId
      * @return array
      */
    public function create($params, $storeId)
    {
        $params = [
            "amount" => $params['amount'],
            "currency" => $params['currency'],
            "capture_mode" => ConstantValue::REVOLUT_AUTHORIZE_ONLY_NEW_API
        ];

        $locationId = $this->config->getLocationSetupId($storeId);

        if ($locationId) {
            $params['location_id'] = $locationId;
        }

        if (!$this->config->isManualCapture($storeId)) {
            $params["cancel_authorised_after"] = ConstantValue::AUTO_CANCEL_TIMEOUT;
        }

        $order = $this->post($this->getApiUrl($storeId, '', '', true), $storeId, $params);

        if (isset($order['token'])) {
            $order['public_id'] = $order['token'];
        }

        return $order;
    }

    /**
     * Update Order amount via API
     *
     * @param string $orderId
     * @param array $params
     * @param int $storeId
     * @return array
     */
    public function update($orderId, $params, $storeId)
    {
        return $this->patch($this->getApiUrl($storeId, $orderId), $storeId, ["amount" => $params['amount'], "currency" => $params['currency']]);
    }

    /**
     * Get Order via API
     *
     * @param string $orderId
     * @param int $storeId
     * @return array
     */
    public function retrieve($orderId, $storeId)
    {
        return $this->get($this->getApiUrl($storeId, $orderId), $storeId);
    }

    /**
     * Cancel Order via API
     *
     * @param string $orderId
     * @param int $storeId
     * @return array
     */
    public function cancel($orderId, $storeId)
    {
        return $this->post($this->getApiUrl($storeId, $orderId, 'cancel'), $storeId);
    }

    /**
     * Get Order via API
     *
     * @param string $orderId
     * @param int $amount
     * @param int $storeId
     * @return array
     */
    public function capture($orderId, $amount, $storeId)
    {
        return $this->post($this->getApiUrl($storeId, $orderId, 'capture'), $storeId, ["amount" => $amount]);
    }

    /**
     * Refund Order via API
     *
     * @param string $orderId
     * @param int $amount
     * @param string $currency
     * @param int $storeId
     * @return array
     */
    public function refund($orderId, $amount, $currency, $storeId)
    {
        return $this->post($this->getApiUrl($storeId, $orderId, 'refund'), $storeId, ["amount" => $amount, "currency" => $currency]);
    }

    /**
     * Update Order Merchant ref via API
     *
     * @param string $orderId
     * @param mixed $merchantOrderId
     * @param int $storeId
     * @return array
     */
    public function updateMerchantOrderId($orderId, $merchantOrderId, $storeId)
    {
        return $this->patch($this->getApiUrl($storeId, $orderId), $storeId, ["merchant_order_ext_ref" => $merchantOrderId]);
    }

    /**
     * Get Orders API URL
     *
     * @param int $storeId
     * @param string $orderId
     * @param string $action
     * @param bool $newApi
     * @return string
     */
    public function getApiUrl($storeId, $orderId = '', $action = '', $newApi = false)
    {
        $apiBaseUrl =  $this->config->getApiUrl($storeId);
        $apiUrl =  $apiBaseUrl . ConstantValue::API_VER . '/' . ConstantValue::ENDPOINT_ORDER;

        if ($newApi) {
            $apiUrl =  $apiBaseUrl . ConstantValue::API . '/' . ConstantValue::ENDPOINT_ORDER;
        }

        if ($orderId) {
            $apiUrl .= '/' . $orderId;
        }
        
        if ($action) {
            $apiUrl .= '/' . $action;
        }

        return $apiUrl;
    }
}
