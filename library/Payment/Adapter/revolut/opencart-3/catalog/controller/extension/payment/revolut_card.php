<?php

require_once(__DIR__ . '/revolut.php');

class ControllerExtensionPaymentRevolutCard extends ControllerExtensionPaymentRevolut
{
    public function index()
    {
        $api_request = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));

        $this->load->language('extension/payment/revolut_card');
        $data = $this->getPaymentData('revolut_card');
        $data['testmode'] = $this->config->get('payment_revolut_test');
        $data['payment_revolut_upsell_banner_enabled'] = $this->config->get('payment_revolut_upsell_banner_enabled');
        $data['payment_view'] = $this->config->get('payment_revolut_payment_view');

        $data['upsell_embed_script'] = $api_request->getApiBaseUrl() . 'upsell/embed.js';
        return $this->load->view('extension/payment/revolut_card', $data);
    }
}
