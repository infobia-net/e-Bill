<?php

namespace Revolut\Payment\Model\Helper\Api;

use Revolut\Payment\Model\Helper\ConstantValue;

/**
 * Class RevolutOrderApi
 */
class RevolutWebhookApi extends RevolutApi
{
    /**
     * Set via API
     *
     * @param string $webhookUrl
     * @param int $storeId
     * @return array result
     */
    public function set($webhookUrl, $storeId)
    {
        return $this->post(
            $this->getApiUrl($storeId),
            $storeId,
            [ "url" => $webhookUrl,
              "events" => ["ORDER_COMPLETED", "ORDER_AUTHORISED"]
            ]
        );
    }
    
    /**
     * Update via API
     *
     * @param string $webhookUrl
     * @param string $webhookId
     * @param int $storeId
     * @return array result
     */
    public function update($webhookUrl, $webhookId, $storeId)
    {
        return $this->put(
            $this->getApiUrl($storeId, $webhookId),
            $storeId,
            [ "url" => $webhookUrl,
              "events" => ["ORDER_COMPLETED", "ORDER_AUTHORISED"]
            ]
        );
    }

    /**
     * Clears Webhook list on API
     *
     * @param  int $storeId
     * @return void.
     */
    public function clear($storeId)
    {
        foreach ($this->list($storeId) as $webhook) {
            if (!isset($webhook['id'])) {
                continue;
            }
            $this->delete($this->getApiUrl($storeId, $webhook['id']), $storeId);
        }
    }

    /**
     * Retrieves Webhook list on API
     *
     * @param  int $storeId
     * @return array
     */
    public function list($storeId)
    {
        return $this->get($this->getApiUrl($storeId), $storeId);
    }

    /**
     * Get Webhooks API URL
     *
     * @param  int $storeId
     * @param  string $webhookId
     * @return string
     */
    public function getApiUrl($storeId, $webhookId = '')
    {
        $apiUrl = $this->config->getApiUrl($storeId) . ConstantValue::API_VER . '/' . ConstantValue::ENDPOINT_WEBHOOK;

        if ($webhookId) {
            $apiUrl .= '/' . $webhookId;
        }

        return $apiUrl;
    }
}
