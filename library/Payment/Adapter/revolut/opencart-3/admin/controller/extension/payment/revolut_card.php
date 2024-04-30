<?php

require_once(__DIR__ . '/revolut.php');

class ControllerExtensionPaymentRevolutCard extends ControllerExtensionPaymentRevolut
{
    private $error = array();

    public function index()
    {
        $this->gateway = "revolut_card";

        $this->load->language('extension/payment/revolut');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->document->addStyle('view/javascript/revolut/css/bootstrap-colorpicker.css');
        $this->document->addScript('view/javascript/revolut/js/bootstrap-colorpicker.js');

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->load->model('extension/payment/revolut');

            $this->model_setting_setting->editSetting("payment_{$this->gateway}", $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link("extension/payment/{$this->gateway}", 'user_token=' . $this->session->data['user_token'], true));
        }

        $configuration['success'] = isset($this->session->data['success']) ? $this->session->data['success'] : '';
        unset($this->session->data['success']);
        $configuration['error_api_key_config'] = !$this->setupWebhook() ? $this->language->get('error_api_key_config') : '';

        $configuration['breadcrumbs'] = $this->getBreadcrumbs();
        $configuration['action'] = $this->url->link("extension/payment/{$this->gateway}", 'user_token=' . $this->session->data['user_token'], true);
        $configuration['cancel'] = $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);
        $configuration['header'] = $this->load->controller('common/header');
        $configuration['column_left'] = $this->load->controller('common/column_left');
        $configuration['footer'] = $this->load->controller('common/footer');
        $configuration['user_token'] = $this->session->data['user_token'];

        $configuration['payment_revolut_card_title'] = $this->getFromPostOrConfig('payment_revolut_card_title', 'Pay with Card (Revolut Gateway)');
        $configuration['payment_revolut_card_view'] = $this->getFromPostOrConfig('payment_revolut_card_view');
        $configuration["payment_{$this->gateway}_total"] = $this->getFromPostOrConfig("payment_{$this->gateway}_total", 0);

        $configuration["payment_{$this->gateway}_geo_zone_id"] = $this->getFromPostOrConfig("payment_{$this->gateway}_geo_zone_id");
        $configuration["payment_{$this->gateway}_status"] = $this->getFromPostOrConfig("payment_{$this->gateway}_status");
        $configuration["payment_{$this->gateway}_sort_order"] = $this->getFromPostOrConfig("payment_{$this->gateway}_sort_order", 1);

        $configuration['payment_revolut_card_customise'] = $this->getFromPostOrConfig('payment_revolut_card_customise');
        $configuration['payment_revolut_card_background_colour'] = $this->getFromPostOrConfig('payment_revolut_card_background_colour', '#ffffff');
        $configuration['payment_revolut_card_font_colour'] = $this->getFromPostOrConfig('payment_revolut_card_font_colour', '#848484');
        $configuration['payment_revolut_card_logo_theme'] = $this->getFromPostOrConfig('payment_revolut_card_logo_theme');


        $this->load->model('localisation/geo_zone');
        $configuration['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();


        $this->response->setOutput($this->load->view('extension/payment/revolut_card', $configuration));
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
}
