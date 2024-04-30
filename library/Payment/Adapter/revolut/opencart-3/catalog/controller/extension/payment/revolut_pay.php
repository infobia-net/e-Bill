<?php

require_once(__DIR__ . '/revolut.php');

class ControllerExtensionPaymentRevolutPay extends ControllerExtensionPaymentRevolut
{
    public function index()
    {
        $this->load->language('extension/payment/revolut_pay');
        $data = $this->getPaymentData('revolut_pay');
        $data['testmode'] = $this->config->get('payment_revolut_test');
        $data['payment_view'] = $this->config->get('payment_revolut_payment_view');
        $data['js_domain_source'] = 'merchant';

        if ($this->config->get('payment_revolut_test')) {
            $data['js_domain_source'] = 'sandbox-merchant';
        }

        $data['payment_revolut_pay_theme'] = $this->config->get('payment_revolut_pay_theme');
        $data['payment_revolut_pay_radius'] = $this->config->get('payment_revolut_pay_radius');
        $data['payment_revolut_pay_size'] = $this->config->get('payment_revolut_pay_size');
        $data['payment_revolut_pay_loader'] = HTTPS_SERVER . 'catalog/view/theme/default/image/revolut/loading-gif.gif';
        $data['mobile_redirection_url'] = $this->url->link('extension/payment/revolut/appRedirection');

        return $this->load->view('extension/payment/revolut_pay', $data);
    }
}
