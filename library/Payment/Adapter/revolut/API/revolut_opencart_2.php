<?php
require_once(DIR_SYSTEM . 'library/vendor/revolut/api_request.php');

class ModelExtensionPaymentRevolut extends Model {
    public function install() {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "revolut_order` (
          `revolut_order_id` int(11) NOT NULL AUTO_INCREMENT,
          `order_id` int(11) NOT NULL,
          `revolut_id` varchar(255) NOT NULL,
          `currency_code` CHAR(3) NOT NULL,
          `total` DECIMAL (10,2) NOT NULL,
          `date_added` DATETIME NOT NULL,
          `date_modified` DATETIME NOT NULL,
          PRIMARY KEY (`revolut_order_id`)
        ) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "revolut_order_state` (
          `revolut_order_state_id` INT(11) NOT NULL AUTO_INCREMENT,
          `revolut_order_id` INT(11) NOT NULL,
          `date_added` DATETIME NOT NULL,
          `state` ENUM('PENDING', 'PROCESSING', 'AUTHORISED', 'COMPLETED', 'CANCELLED', 'FAILED', 'REFUNDED') DEFAULT NULL,
          `amount` DECIMAL (10,2) NOT NULL,
          PRIMARY KEY (`revolut_order_state_id`)
        ) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;");
    }

    public function uninstall() {
        $this->deleteWebhook();

        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "revolut_order`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "revolut_order_state`");
    }

    public function getOrder($order_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "revolut_order` WHERE `order_id` = '" . (int)$order_id . "' LIMIT 1");

        if ($query->num_rows) {
            $query->row['transactions'] = $this->getTransactions($query->row['revolut_order_id']);

            return $query->row;
        } else {
            return false;
        }
    }

    public function setUpWebhook() {
        if ($this->config->get('revolut_api_key')) {
            $api_request = new ApiRequest($this->config->get('revolut_api_key'), $this->config->get('revolut_test'));

            $body = array(
                'url'    => HTTPS_CATALOG . 'index.php?route=extension/payment/revolut/webhook',
                'events' => array('ORDER_COMPLETED', 'ORDER_AUTHORISED', 'ORDER_PAYMENT_AUTHENTICATED', 'ORDER_PAYMENT_DECLINED', 'ORDER_PAYMENT_FAILED')
            );

            $result = $api_request->post('webhooks', $body);

            $http_code = $result['http_code'];
            $response = $result['response'];

            if ($http_code == '200' && !empty($response['id']) && !empty($response['url']) && !empty($response['events'])) {
                $this->setWebhookId($response['id']);

                return $http_code;
            } else {
                $this->setWebhookId();

                return $http_code;
            }
        } else {
            $this->setWebhookId();

            return $http_code;
        }
    }


    public function updateWebhook($api_key) {
        if ($this->config->get('revolut_api_key') != $api_key) {
            $this->deleteWebhook();
            $this->setWebhookId();
        }
    }

    public function deleteWebhook() {
        if ($this->config->get('revolut_webhook_id')) {
            $api_request = new ApiRequest($this->config->get('revolut_api_key'), $this->config->get('revolut_test'));

            $result = $api_request->delete('webhooks/' . $this->config->get('revolut_webhook_id'));

            $http_code = $result['http_code'];
            $response = $result['response'];

            $this->setWebhookId();

            return $http_code;
        } else {
            return false;
        }
    }

    public function createRefund($revolut_order_info, $amount = 0.0) {
        $api_request = new ApiRequest($this->config->get('revolut_api_key'), $this->config->get('revolut_test'));

        $body = array(
            'amount'     => (int)($amount * 100),
            'currency'   => $revolut_order_info['currency_code']
        );

        $result = $api_request->post('orders/' . $revolut_order_info['revolut_id'] . '/refund', $body);

        $http_code = $result['http_code'];
        $response = $result['response'];
        
        if (($http_code == '200' || $http_code == '201') && $response['type'] == 'REFUND') {
            $amount = (float)((int)$response['order_amount']['value'] / 100);

            $comment = 'Revolut Payment Gateway - Transaction Type: ' . $response['type'] . '. Transaction ID: ' . $response['id'];

            $this->addOrderHistory($revolut_order_info['order_id'], $this->config->get('revolut_refunded_status_id'), $comment);
            $this->addTransaction($revolut_order_info['revolut_order_id'], 'REFUNDED', $amount);
        }

        return $http_code;
    }

    private function addTransaction($revolut_order_id, $state, $amount) {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "revolut_order_state` SET `revolut_order_id` = '" . (int)$revolut_order_id . "', `state` = '" . $this->db->escape($state) . "', `amount` = '" . (float)$amount . "', `date_added` = NOW()");
    }

    private function addOrderHistory($order_id, $order_status_id, $comment) {
        $this->db->query("UPDATE `" . DB_PREFIX . "order` SET order_status_id = '" . (int)$order_status_id . "' WHERE order_id = '" . (int)$order_id . "'");
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$order_id . "', comment = '" . $this->db->escape($comment) . "', order_status_id = '" . (int)$order_status_id . "', notify = '0', date_added = NOW()");
    }

    private function getTransactions($revolut_order_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "revolut_order_state` WHERE `revolut_order_id` = '" . (int)$revolut_order_id . "' ORDER BY revolut_order_state_id ASC");
        
        return $query->rows;
    }

    private function setWebhookId($webhook_id = '') {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE store_id = '0' AND `code` = 'revolut_webhook' AND `key` = 'revolut_webhook_id'");

        if ($webhook_id) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET store_id = '0', `code` = 'revolut_webhook', `key` = 'revolut_webhook_id', `value` = '" . $this->db->escape($webhook_id) . "'");
        }
    }
}