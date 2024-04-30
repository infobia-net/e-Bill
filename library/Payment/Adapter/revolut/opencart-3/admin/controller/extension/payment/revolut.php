<?php

class ControllerExtensionPaymentRevolut extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('extension/payment/revolut');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->document->addStyle('view/javascript/revolut/css/bootstrap-colorpicker.css');
        $this->document->addScript('view/javascript/revolut/js/bootstrap-colorpicker.js');

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->load->model('extension/payment/revolut');


            $this->request->post['payment_revolut_api_public_key'] = $this->model_extension_payment_revolut->getPublicKey(
                $this->getFromPostOrConfig('payment_revolut_api_key'),
                $this->getFromPostOrConfig('payment_revolut_test')
            );

            $this->model_setting_setting->editSetting('payment_revolut', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/payment/revolut', 'user_token=' . $this->session->data['user_token'], true));
        }

        $configuration['success'] = isset($this->session->data['success']) ? $this->session->data['success'] : '';
        unset($this->session->data['success']);

        $configuration['error_webhook_not_setup'] = !$this->setupWebhook() ? $this->language->get('error_webhook_not_setup') : '';
        $configuration['error_order_statuses'] = !$this->config->get('payment_revolut_completed_status_id') ? $this->language->get('error_order_statuses') : '';
        $configuration['show_webhook_button'] = (bool) $this->config->get('payment_revolut_api_key');
        $configuration['webhook_id'] = $this->config->get('payment_revolut_webhook_id');
        $configuration['error_warning'] = isset($this->error['warning']) ? $this->error['warning'] : '';
        $configuration['error_api_key'] = isset($this->error['api_key']) ? $this->error['api_key'] : '';

        $configuration['breadcrumbs'] = $this->getBreadcrumbs();
        $configuration['action'] = $this->url->link('extension/payment/revolut', 'user_token=' . $this->session->data['user_token'], true);
        $configuration['cancel'] = $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);
        $configuration['header'] = $this->load->controller('common/header');
        $configuration['column_left'] = $this->load->controller('common/column_left');
        $configuration['footer'] = $this->load->controller('common/footer');
        $configuration['user_token'] = $this->session->data['user_token'];

        $configuration['payment_revolut_api_key'] = $this->getFromPostOrConfig('payment_revolut_api_key');
        $configuration['payment_revolut_test'] = $this->getFromPostOrConfig('payment_revolut_test');
        $configuration['payment_revolut_upsell_banner_enabled'] = (bool) $this->getFromPostOrConfig('payment_revolut_upsell_banner_enabled');
        $configuration['payment_revolut_capture_mode'] = $this->getFromPostOrConfig('payment_revolut_capture_mode');
        $configuration['payment_revolut_capture_status_id'] = $this->getFromPostOrConfig('payment_revolut_capture_status_id');
        $configuration['payment_revolut_payment_title'] = $this->getFromPostOrConfig('payment_revolut_payment_title');
        $configuration['payment_revolut_payment_view'] = $this->getFromPostOrConfig('payment_revolut_payment_view');
        $configuration['payment_revolut_total'] = $this->getFromPostOrConfig('payment_revolut_total');
        $configuration['payment_revolut_card_customise'] = $this->getFromPostOrConfig('payment_revolut_card_customise');
        $configuration['payment_revolut_card_background_colour'] = $this->getFromPostOrConfig('payment_revolut_card_background_colour', '#ffffff');
        $configuration['payment_revolut_card_font_colour'] = $this->getFromPostOrConfig('payment_revolut_card_font_colour', '#848484');
        $configuration['payment_revolut_card_logo_theme'] = $this->getFromPostOrConfig('payment_revolut_card_logo_theme');
        $configuration['payment_revolut_pending_status_id'] = $this->getFromPostOrConfig('payment_revolut_pending_status_id');
        $configuration['payment_revolut_authorised_status_id'] = $this->getFromPostOrConfig('payment_revolut_authorised_status_id');
        $configuration['payment_revolut_completed_status_id'] = $this->getFromPostOrConfig('payment_revolut_completed_status_id');
        $configuration['payment_revolut_processing_status_id'] = $this->getFromPostOrConfig('payment_revolut_processing_status_id');
        $configuration['payment_revolut_refunded_status_id'] = $this->getFromPostOrConfig('payment_revolut_refunded_status_id');
        $configuration['payment_revolut_cancelled_status_id'] = $this->getFromPostOrConfig('payment_revolut_cancelled_status_id');
        $configuration['payment_revolut_failed_status_id'] = $this->getFromPostOrConfig('payment_revolut_failed_status_id');
        $configuration['payment_revolut_geo_zone_id'] = $this->getFromPostOrConfig('payment_revolut_geo_zone_id');
        $configuration['payment_revolut_status'] = $this->getFromPostOrConfig('payment_revolut_status');
        $configuration['payment_revolut_pay_status'] = $this->getFromPostOrConfig('payment_revolut_pay_status');
        $configuration['payment_revolut_sort_order'] = $this->getFromPostOrConfig('payment_revolut_sort_order');
        $configuration['payment_revolut_pay_sort_order'] = $this->getFromPostOrConfig('payment_revolut_pay_sort_order');


        $this->load->model('localisation/order_status');
        $configuration['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();



        $this->load->model('localisation/geo_zone');
        $configuration['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();


        $this->response->setOutput($this->load->view('extension/payment/revolut', $configuration));
    }

    public function install()
    {
        $this->load->model('extension/payment/revolut');
        $this->model_extension_payment_revolut->install();
        $this->load->model('setting/event');
        $this->load->model('setting/setting');

        $this->model_setting_setting->editSetting('payment_revolut', ['payment_revolut_upsell_banner_enabled' => 1]);

        $this->model_setting_event->addEvent('payment_revolut', 'catalog/model/checkout/order/addOrderHistory/after', 'extension/payment/revolut/eventPostModelAddOrderHistory');
        $this->model_setting_event->addEvent('upsell_banner_revolut', 'catalog/controller/checkout/success', 'extension/payment/revolut/injectUpsellScriptConfirmationPage');
        $this->model_setting_event->addEvent('payment_method_preprocess_event_revolut', 'catalog/controller/checkout/checkout', 'extension/payment/revolut/paymentMethodPreprocessEventRevolut');
    }

    public function uninstall()
    {
        $this->load->model('extension/payment/revolut');
        $this->model_extension_payment_revolut->uninstall();
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode('payment_revolut');
        $this->model_setting_event->deleteEventByCode('upsell_banner_revolut');
        $this->model_setting_event->deleteEventByCode('logos_render_event_revolut');
    }

    public function setupWebhook()
    {
        $this->load->model('extension/payment/revolut');
        return $this->model_extension_payment_revolut->setUpWebhook();
    }

    public function order()
    {
        if (!$this->config->get('payment_revolut_status')) {
            return false;
        }

        $this->load->model('sale/order');
        $this->load->model('extension/payment/revolut');

        $revolut_order = $this->model_extension_payment_revolut->getOrderByOcOrderId($this->request->get['order_id']);

        if (empty($revolut_order)) {
            return false;
        }

        $api_request = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));

        $result = $api_request->get('orders/' . $revolut_order['revolut_id']);
        $response = $result['response'];

        if (empty($response['id'])) {
            return false;
        }

        $order_amount = !empty($response['order_amount']['value']) ? $response['order_amount']['value'] : 0;
        $order_currency = !empty($response['order_amount']['currency']) ? $response['order_amount']['currency'] : '';
        $refunded_amount = !empty($response['refunded_amount']['value']) ? $response['refunded_amount']['value'] : 0;
        $order_state = !empty($response['state']) ? $response['state'] : '';

        if ($order_currency != 'JPY') {
            $order_amount = $order_amount / 100;
            $refunded_amount = $refunded_amount / 100;
        }

        $refundable_amount = $order_amount - $refunded_amount;

        $data = $this->load->language('extension/payment/revolut');

        $revolut_order['order_amount'] = number_format($order_amount, 2);
        $revolut_order['order_currency'] = $order_currency;
        $revolut_order['refunded_amount'] = number_format($refunded_amount, 2);
        $revolut_order['refundable_amount'] = number_format($refundable_amount, 2);
        $revolut_order['is_refundable_order'] = $refundable_amount > 0 && !empty($response['state']) && $response['state'] == 'COMPLETED';
        $revolut_order['state'] = $order_state;
        
        $data['revolut_order'] = $revolut_order;

        $data['order_id'] = $this->request->get['order_id'];
        $data['user_token'] = $this->session->data['user_token'];

        return $this->load->view('extension/payment/revolut_order', $data);
    }

    public function getFromPostOrConfig($key, $default = '')
    {
        if (isset($this->request->post[$key])) {
            return $this->request->post[$key];
        }

        return !empty($this->config->get($key)) ? $this->config->get($key) : $default;
    }

    public function getBreadcrumbs()
    {
        $breadcrumbs = array();

        $breadcrumbs[] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $breadcrumbs[] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
        );

        $breadcrumbs[] = array(
            'text' => $this->language->get('heading_title_' . str_replace('revolut_', '', $this->gateway)),
            'href' => $this->url->link("extension/payment/{$this->gateway}", 'user_token=' . $this->session->data['user_token'], true)
        );

        return $breadcrumbs;
    }

    public function refund()
    {
        $json = array();

        $this->load->language('extension/payment/revolut');

        if (!isset($this->request->get['order_id']) || empty($this->request->post['refund_amount'])) {
            return false;
        }

        $this->load->model('sale/order');
        $this->load->model('extension/payment/revolut');

        $revolut_order_info = $this->model_extension_payment_revolut->getOrderByOcOrderId($this->request->get['order_id']);
        $oc_order_info = $this->model_sale_order->getOrder($this->request->get['order_id']);
        $revolut_order_info['currency'] = $oc_order_info['currency_code'];

        if (!$revolut_order_info) {
            $json['error'] = $this->language->get('error_invalid_request');
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
            return;
        }

        $responce = $this->model_extension_payment_revolut->createRefund($revolut_order_info, $this->request->post['refund_amount']);

        if (!empty($responce['id'])) {
            $json['success'] = sprintf($this->language->get('text_refund_success'), $revolut_order_info['order_id']);
        } else {
            $json['error'] = $this->language->get('error_invalid_request');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/payment/revolut')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->request->post['payment_revolut_api_key']) {
            $this->error['api_key'] = $this->language->get('error_api_key');
        }

        return !$this->error;
    }
}
