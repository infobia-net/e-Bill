<?php

class ModelExtensionPaymentRevolut extends Model
{
    public function getMethod($address, $total)
    {
        return [];
    }

    public function addOrder($revolut_id, $order_info)
    {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "revolut_order` SET `order_id` = '" . (int)$order_info['order_id'] . "', `revolut_public_id` = '" . $this->db->escape($order_info['public_id']) . "', `revolut_id` = '" . $this->db->escape($revolut_id) . "', `date_added` = NOW(), `date_modified` = NOW()");
        return $this->db->getLastId();
    }

    public function getOrderByOcOrderId($oc_order_id)
    {
        return $this->db->query("SELECT * FROM `" . DB_PREFIX . "revolut_order` WHERE `order_id` = '" . (int)$oc_order_id . "'")->row;
    }

    public function deleteOrderByOcOrderId($oc_order_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "revolut_order` WHERE `order_id` = '" . (int)$oc_order_id . "'");
    }

    public function getOrderByRevolutPublicId($revolut_public_id)
    {
        return $this->db->query("SELECT * FROM `" . DB_PREFIX . "revolut_order` WHERE `revolut_public_id` = '" . $this->db->escape($revolut_public_id) . "'")->row;
    }

    public function getOrderByRevolutOrderId($revolut_order_id)
    {
        return $this->db->query("SELECT * FROM `" . DB_PREFIX . "revolut_order` WHERE `revolut_id` = '" . $this->db->escape($revolut_order_id) . "'")->row;
    }

    public function addOrderHistory($order_id, $order_status_id, $comment = '')
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$order_id . "', comment = '" . $this->db->escape($comment) . "', order_status_id = '" . (int)$order_status_id . "', notify = '0', date_added = NOW()");
    }

    public function getOrderHistory($order_id, $order_status_id, $comment)
    {
        return $this->db->query("SELECT order_id FROM " . DB_PREFIX . "order_history WHERE order_id = '" . (int)$order_id . "' AND order_status_id = '" . (int)$order_status_id . "' AND comment = '" . $this->db->escape($comment) . "'")->row;
    }

    public function updatePaymentMethodName($order_id, $payment_title)
    {
        $this->db->query("UPDATE `" . DB_PREFIX . "order` SET payment_method = '" . $this->db->escape($payment_title) . "' WHERE order_id = '" . (int)$order_id . "'");
    }


    public function getRevolutOrder($order_id)
    {
        return $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "revolut_order` WHERE `order_id` = '" . (int)$order_id . "'")->row;
    }
}
