<?php

class ModelExtensionPaymentRevolutCard extends Model
{
    public function getMethod($address, $total)
    {
        $this->load->language('extension/payment/revolut_card');

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payment_revolut_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

        if ($this->config->get('payment_revolut_total') > $total) {
            $status = false;
        } elseif (!$this->config->get('payment_revolut_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        $method_data = array();

        if ($status) {
            $method_data = array(
                'code'       => 'revolut_card',
                'title'      => ($this->config->get('payment_revolut_card_title') ? $this->config->get('payment_revolut_card_title') : $this->language->get('text_title')) . $this->session->data["card_logos"],
                'terms'      => '',
                'sort_order' => $this->config->get('payment_revolut_card_sort_order')
            );
        }

        $available_payment_methods = $this->session->data['available_payment_methods'];

        if(!in_array('card', $available_payment_methods))
        {
            return '';
        }

        return $method_data;
    }
}
