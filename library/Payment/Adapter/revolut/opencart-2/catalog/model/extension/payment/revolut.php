<?php
class ModelExtensionPaymentRevolut extends Model {
    public function getMethod($address, $total) {
        $this->load->language('extension/payment/revolut');

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('revolut_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

        if ($this->config->get('revolut_total') > $total) {
            $status = false;
        } elseif (!$this->config->get('revolut_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        $method_data = array();

        if ($status) {
            $method_data = array(
                'code'       => 'revolut',
                'title'      => ($this->config->get('revolut_payment_title') ? $this->config->get('revolut_payment_title') : $this->language->get('text_title')) . '<img src="' . HTTPS_SERVER . 'catalog/view/theme/default/image/revolut/visa_mc.png' . '" title="Visa/Mastercard" alt="Visa/Mastercard" class="img-responsive" />',
                'terms'      => '',
                'sort_order' => $this->config->get('revolut_sort_order')
            );
        }

        return $method_data;
    }

    public function addOrder($revolut_id, $order_info) {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "revolut_order` SET `order_id` = '" . (int)$order_info['order_id'] . "', `revolut_id` = '" . $this->db->escape($revolut_id) . "', `currency_code` = '" . $this->db->escape($order_info['currency_code']) . "', `total` = '" . (float)$this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false) . "', `date_added` = NOW(), `date_modified` = NOW()");

        return $this->db->getLastId();
    }

    public function getOrder($order_id, $revolut_id) {
        $revolut_order_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "revolut_order` WHERE `order_id` = '" . (int)$order_id . "' AND `revolut_id` = '" . $this->db->escape($revolut_id) . "'");

        return $revolut_order_query->row;
    }

    public function addTransaction($revolut_order_id, $state, $amount) {
        $transaction_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "revolut_order_state` WHERE `revolut_order_id` = '" . (int)$revolut_order_id . "' AND `state` = '" . $this->db->escape($state) . "' AND `amount` = '" . (float)$amount . "'");

        if (!$transaction_query->num_rows) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "revolut_order_state` SET `revolut_order_id` = '" . (int)$revolut_order_id . "', `state` = '" . $this->db->escape($state) . "', `amount` = '" . (float)$amount . "', `date_added` = NOW()");
        }
    }

    public function addOrderHistory($order_id, $order_status_id, $comment = '') {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$order_id . "', comment = '" . $this->db->escape($comment) . "', order_status_id = '" . (int)$order_status_id . "', notify = '0', date_added = NOW()");
    }

    public function getOrderHistory($order_id, $order_status_id, $comment) {
        $query = $this->db->query("SELECT order_id FROM " . DB_PREFIX . "order_history WHERE order_id = '" . (int)$order_id . "' AND order_status_id = '" . (int)$order_status_id . "' AND comment = '" . $this->db->escape($comment) . "'");
    
        return $query->row;
    }

    public function updatePaymentMethodName($order_id) {
        $this->load->language('extension/payment/revolut');

        $payment_title = $this->config->get('revolut_payment_title') ? $this->config->get('revolut_payment_title') : $this->language->get('text_title');

        $this->db->query("UPDATE `" . DB_PREFIX . "order` SET payment_method = '" . $this->db->escape($payment_title) . "' WHERE order_id = '" . (int)$order_id . "'");
    }

    public function getRevolutOrder($order_id) {
        $revolut_order_query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "revolut_order` WHERE `order_id` = '" . (int)$order_id . "'");

        return $revolut_order_query->row;
    }
}
