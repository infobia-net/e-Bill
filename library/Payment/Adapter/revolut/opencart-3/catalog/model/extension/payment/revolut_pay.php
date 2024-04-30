<?php

require_once(__DIR__ . '/revolut.php');

class ModelExtensionPaymentRevolutPay extends ModelExtensionPaymentRevolut
{
    public function getMethod($address, $total)
    {
        $this->load->language('extension/payment/revolut_pay');

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payment_revolut_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
        $payment_revolut_api_public_key = $this->config->get('payment_revolut_api_public_key');

        if (empty($payment_revolut_api_public_key)) {
            $status = false;
        } elseif ($this->config->get('payment_revolut_pay_total') > $total) {
            $status = false;
        } elseif (!$this->config->get('payment_revolut_pay_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        $method_data = array();

        if ($status) {
            $method_data = array(
                'code'       => 'revolut_pay',
                'title'      => '<span class="notranslate"> Revolut Pay' . $this->session->data['revolut_pay_logos'],
                'terms'      => '',
                'sort_order' => $this->config->get('payment_revolut_pay_sort_order')
            );
        }

        $available_payment_methods = $this->session->data['available_payment_methods'];

        if(!in_array('pay_with_revolut', $available_payment_methods))
        {
            return '';
        }

        return $method_data;
    }
}
