<?php

require_once(DIR_SYSTEM . 'library/vendor/revolut/api_request.php');

class ModelExtensionPaymentRevolut extends Model
{
    public function install()
    {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "revolut_order` (
          `revolut_order_id` int(11) NOT NULL AUTO_INCREMENT,
          `order_id` int(11) NOT NULL,
          `revolut_id` varchar(255) NOT NULL,
          `revolut_public_id` varchar(255) NOT NULL,
          `currency_code` CHAR(3) NOT NULL,
          `total` DECIMAL (10,2) NOT NULL,
          `date_added` DATETIME NOT NULL,
          `date_modified` DATETIME NOT NULL,
          PRIMARY KEY (`revolut_order_id`)
        ) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;");
    }

    public function uninstall()
    {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "revolut_order`");
    }

    public function checkWebhookSetup()
    {
        if (!$this->config->get('payment_revolut_api_key')) {
            return false;
        }

        $api_request = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));
        $webhook_url = HTTPS_CATALOG . 'index.php?route=extension/payment/revolut/webhook';
        $result = $api_request->get('webhooks');

        $webhook_list = $result['response'];

        if (!empty($webhook_list) && is_array($webhook_list)) {
            return in_array($webhook_url, array_column($webhook_list, 'url'));
        }

        return false;
    }

    public function registerApplePayDomain($domain)
    {
        $api_client = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'), 'api/');
        $result = $api_client->post('apple-pay/domains/register', ['domain' => $domain]);
        return $result['response'];
    }

    public function setUpWebhook()
    {
        if (!$this->config->get('payment_revolut_api_key')) {
            return false;
        }
        if ($this->checkWebhookSetup()) {
            return true;
        }

        $api_request = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));

        $body = array(
            'url'    => HTTPS_CATALOG . 'index.php?route=extension/payment/revolut/webhook',
            'events' => array('ORDER_COMPLETED', 'ORDER_AUTHORISED')
        );

        $result = $api_request->post('webhooks', $body);
        $response = $result['response'];

        return !empty($response['id']);
    }

    public function getPublicKey($api_key, $test)
    {
        if (!empty($api_key)) {
            $api_request = new ApiRequest($api_key, $test);

            $result = $api_request->get('api/public-key/latest');
            $response = $result['response'];

            $merchant_public_key = isset($response['public_key']) ? $response['public_key'] : '';
            return $merchant_public_key;
        }

        return '';
    }

    public function createRefund($revolut_order_info, $amount = 0.0)
    {
        $api_request = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));

        $body = array(
            'amount'     => (int)($amount * 100),
            'currency'   => $revolut_order_info['currency']
        );

        $result = $api_request->post('orders/' . $revolut_order_info['revolut_id'] . '/refund', $body);

        $response = $result['response'];

        if (!empty($response['id'])) {
            $amount = (float)((int)$response['order_amount']['value'] / 100);
            $comment = 'Revolut Payment Gateway - Transaction Type: ' . $response['type'] . '. Transaction ID: ' . $response['id'];
            $this->addOrderHistory($revolut_order_info['order_id'], $this->config->get('payment_revolut_refunded_status_id'), $comment);
        }

        return $response;
    }

    private function addOrderHistory($order_id, $order_status_id, $comment)
    {
        $this->db->query("UPDATE `" . DB_PREFIX . "order` SET order_status_id = '" . (int)$order_status_id . "' WHERE order_id = '" . (int)$order_id . "'");
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$order_id . "', comment = '" . $this->db->escape($comment) . "', order_status_id = '" . (int)$order_status_id . "', notify = '0', date_added = NOW()");
    }

    public function getOrderByOcOrderId($oc_order_id)
    {
        $revolut_order_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "revolut_order` WHERE `order_id` = '" . (int)$oc_order_id . "'");
        return $revolut_order_query->row;
    }
}
