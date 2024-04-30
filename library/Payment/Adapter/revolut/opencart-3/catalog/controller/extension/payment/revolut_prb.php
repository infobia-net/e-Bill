<?php

require_once(__DIR__ . '/revolut.php');

class ControllerExtensionPaymentRevolutPrb extends ControllerExtensionPaymentRevolut
{
    public function index()
    {
        $this->load->language('extension/payment/revolut_prb');
        $data = $this->getPaymentData('revolut_prb');
        $data['testmode'] = $this->config->get('payment_revolut_test');
        $data['payment_view'] = $this->config->get('payment_revolut_prbment_view');
        $data['js_domain_source'] = 'merchant';

        if ($this->config->get('payment_revolut_test')) {
            $data['js_domain_source'] = 'sandbox-merchant';
        }
        $data['payment_revolut_prb_theme'] = $this->config->get('payment_revolut_prb_theme');
        $data['payment_revolut_prb_action'] = $this->config->get('payment_revolut_prb_action');
        $data['payment_revolut_prb_radius'] = $this->config->get('payment_revolut_prb_radius');
        $data['payment_revolut_prb_size'] = $this->config->get('payment_revolut_prb_size');
        $data['payment_revolut_prb_loader'] = HTTPS_SERVER . 'catalog/view/theme/default/image/revolut/loading-gif.gif';

        return $this->load->view('extension/payment/revolut_prb', $data);
    }
}
