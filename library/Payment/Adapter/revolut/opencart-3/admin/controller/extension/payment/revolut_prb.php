<?php

require_once(__DIR__ . '/revolut.php');

class ControllerExtensionPaymentRevolutPrb extends ControllerExtensionPaymentRevolut
{
    private $error = array();

    public function index()
    {
        $this->gateway = "revolut_prb";

        $this->load->language('extension/payment/revolut');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->load->model('extension/payment/revolut');

            $this->request->post['payment_revolut_prb_apple_pay_domain'] = $this->applePayDomainRegistration();

            $this->model_setting_setting->editSetting('payment_revolut_prb', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/payment/revolut_prb', 'user_token=' . $this->session->data['user_token'], true));
        }

        $configuration['success'] = isset($this->session->data['success']) ? $this->session->data['success'] : '';
        unset($this->session->data['success']);
        $configuration['error_api_key_config'] = !$this->setupWebhook() ? $this->language->get('error_api_key_config') : '';

        $configuration['breadcrumbs'] = $this->getBreadcrumbs();
        $configuration['action'] = $this->url->link('extension/payment/revolut_prb', 'user_token=' . $this->session->data['user_token'], true);
        $configuration['cancel'] = $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);
        $configuration['header'] = $this->load->controller('common/header');
        $configuration['column_left'] = $this->load->controller('common/column_left');
        $configuration['footer'] = $this->load->controller('common/footer');
        $configuration['user_token'] = $this->session->data['user_token'];

        $configuration['payment_revolut_prb_total'] = $this->getFromPostOrConfig('payment_revolut_prb_total', 0);

        $configuration['payment_revolut_prb_geo_zone_id'] = $this->getFromPostOrConfig('payment_revolut_prb_geo_zone_id');
        $configuration['payment_revolut_prb_status'] = $this->getFromPostOrConfig('payment_revolut_prb_status');
        $configuration['payment_revolut_prb_sort_order'] = $this->getFromPostOrConfig('payment_revolut_prb_sort_order', 1);


        $this->load->model('localisation/geo_zone');
        $configuration['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();


        $this->response->setOutput($this->load->view('extension/payment/revolut_prb', $configuration));
    }

    public function install()
    {
    }

    public function uninstall()
    {
    }

    private function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/payment/revolut')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function applePayDomainRegistration()
    {
        $revolut_log = new Log('revolut.log');

        if ($this->getFromPostOrConfig('payment_revolut_prb_apple_pay_domain', "KO") == "OK") {
            $revolut_log->write("Apple pay merchant already onboarded");
            return "OK";
        }

        try {
            $onboarding_file_path = $this->downloadOnboardingFile();
            $oc_domain = parse_url(HTTPS_CATALOG);
            $this->load->model('extension/payment/revolut');
            $register_result  = $this->model_extension_payment_revolut->registerApplePayDomain($oc_domain['host']);
            $revolut_log->write("Apple pay merchant onboarding result: " . \json_encode($register_result));
            $register_res = \json_decode($register_result, true);
            \unlink($onboarding_file_path);
            if (
                !empty($register_res) && is_array($register_res) && in_array('code', array_keys($register_res))
            ) {
                throw new \Exception('Cannot onboard Apple pay merchant: ' . $register_res['code']);
            }

            return "OK";
        } catch (\Exception $e) {
            $revolut_log->write($e->getMessage());

            return "KO";
        }

        return "KO";
    }

    public function downloadOnboardingFile()
    {
        $domain_onboarding_file_name = 'apple-developer-merchantid-domain-association';
        $domain_onboarding_file_directory = '.well-known';
        $opencart_root_dir = str_replace('catalog/', '', DIR_CATALOG);

        $onboarding_file_dir = $opencart_root_dir . $domain_onboarding_file_directory;
        $onboarding_file_path = $opencart_root_dir . $domain_onboarding_file_directory . '/' . $domain_onboarding_file_name;

        $domain_onboarding_file_remote_link = 'https://assets.revolut.com/api-docs/merchant-api/files/apple-developer-merchantid-domain-association';

        if (!\file_exists($onboarding_file_dir) && !@mkdir($onboarding_file_dir, 0755)) {
            throw new \Exception("Can not locate onboarding file: permission issue");
        }

        if (
            !\file_put_contents(
                $onboarding_file_path,
                \file_get_contents($domain_onboarding_file_remote_link)
            )
        ) {
            throw new \Exception('Cannot onboard Apple pay merchant: Can not locate on-boarding file');
        }

        return $onboarding_file_path;
    }
}
