<?php

require_once(__DIR__ . '/revolut.php');

class ModelExtensionPaymentRevolutPrb extends ModelExtensionPaymentRevolut
{
    public function getMethod($address, $total)
    {
        if ($this->config->get('payment_revolut_test')) {
            return [];
        }

        $this->load->language('extension/payment/revolut_prb');

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payment_revolut_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
        $payment_revolut_api_public_key = $this->config->get('payment_revolut_api_public_key');

        if (empty($payment_revolut_api_public_key)) {
            $status = false;
        } elseif ($this->config->get('payment_revolut_prb_total') > $total) {
            $status = false;
        } elseif (!$this->config->get('payment_revolut_prb_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        $method_data = array();

        if ($status) {
            $title = 'Apple Pay <img src="' . HTTPS_SERVER . 'catalog/view/theme/default/image/revolut/apple-pay-logo.svg" style="width:30px;display:inline;margin-left:5px" />';
            $title .= ' - Google Pay <img src="' . HTTPS_SERVER . 'catalog/view/theme/default/image/revolut/g-pay-logo.png' . '" style="width:30px;display:inline;margin-left:5px" />';

            $method_data = array(
                'code'       => 'revolut_prb',
                'title'      =>  $title,
                'terms'      => '',
                'sort_order' => $this->config->get('payment_revolut_prb_sort_order')
            );
        }

        $available_payment_methods = $this->session->data['available_payment_methods'];

        if(!count(array_intersect(['apple_pay', 'google_pay'], $available_payment_methods)))
        {
            return '';
        }

        return $method_data;
    }
}
