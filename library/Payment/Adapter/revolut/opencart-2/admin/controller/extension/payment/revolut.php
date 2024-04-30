<?php
class ControllerExtensionPaymentRevolut extends Controller {
    private $error = array();

    public function index() {
        $data = $this->load->language('extension/payment/revolut');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->document->addStyle('view/javascript/revolut/css/bootstrap-colorpicker.css');
        $this->document->addScript('view/javascript/revolut/js/bootstrap-colorpicker.js');

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->load->model('extension/payment/revolut');

            $this->model_extension_payment_revolut->updateWebhook($this->request->post['revolut_api_key']);

            $this->model_setting_setting->editSetting('revolut', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/payment/revolut', 'token=' . $this->session->data['token'], true));
        }

        if ($this->config->get('revolut_api_key') && !$this->config->get('revolut_webhook_id')) {
            $data['error_webhook_not_setup'] = $this->language->get('error_webhook_not_setup');
        } else {
            $data['error_webhook_not_setup'] = '';
        }

        if (!$this->config->get('revolut_completed_status_id')) {
            $data['error_order_statuses'] = $this->language->get('error_order_statuses');
        } else {
            $data['error_order_statuses'] = '';
        }

        if ($this->config->get('revolut_api_key')) {
            $data['show_webhook_button'] = true;
        } else {
            $data['show_webhook_button'] = false;
        }

        $data['webhook_id'] = $this->config->get('revolut_webhook_id');

        if (!empty($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['api_key'])) {
            $data['error_api_key'] = $this->error['api_key'];
        } else {
            $data['error_api_key'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/payment/revolut', 'token=' . $this->session->data['token'], true)
        );

        $data['action'] = $this->url->link('extension/payment/revolut', 'token=' . $this->session->data['token'], true);

        $data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true);

        if (isset($this->request->post['revolut_api_key'])) {
            $data['revolut_api_key'] = $this->request->post['revolut_api_key'];
        } else {
            $data['revolut_api_key'] = $this->config->get('revolut_api_key');
        }

        if (isset($this->request->post['revolut_test'])) {
            $data['revolut_test'] = $this->request->post['revolut_test'];
        } else {
            $data['revolut_test'] = $this->config->get('revolut_test');
        }

        if (isset($this->request->post['revolut_capture_mode'])) {
            $data['revolut_capture_mode'] = $this->request->post['revolut_capture_mode'];
        } else {
            $data['revolut_capture_mode'] = $this->config->get('revolut_capture_mode');
        }

        if (isset($this->request->post['revolut_capture_status_id'])) {
            $data['revolut_capture_status_id'] = $this->request->post['revolut_capture_status_id'];
        } else {
            $data['revolut_capture_status_id'] = $this->config->get('revolut_capture_status_id');
        }

        if (isset($this->request->post['revolut_payment_title'])) {
            $data['revolut_payment_title'] = $this->request->post['revolut_payment_title'];
        } else {
            $data['revolut_payment_title'] = $this->config->get('revolut_payment_title');
        }

        if (isset($this->request->post['revolut_payment_view'])) {
            $data['revolut_payment_view'] = $this->request->post['revolut_payment_view'];
        } else {
            $data['revolut_payment_view'] = $this->config->get('revolut_payment_view');
        }

        if (isset($this->request->post['revolut_total'])) {
            $data['revolut_total'] = $this->request->post['revolut_total'];
        } else {
            $data['revolut_total'] = $this->config->get('revolut_total');
        }

        if (isset($this->request->post['revolut_customise'])) {
            $data['revolut_customise'] = $this->request->post['revolut_customise'];
        } else {
            $data['revolut_customise'] = $this->config->get('revolut_customise');
        }

        if (isset($this->request->post['revolut_background_colour'])) {
            $data['revolut_background_colour'] = $this->request->post['revolut_background_colour'];
        } elseif ($this->config->get('revolut_background_colour')) {
            $data['revolut_background_colour'] = $this->config->get('revolut_background_colour');
        } else {
            $data['revolut_background_colour'] = '#ffffff';
        }

        if (isset($this->request->post['revolut_font_colour'])) {
            $data['revolut_font_colour'] = $this->request->post['revolut_font_colour'];
        } elseif ($this->config->get('revolut_font_colour')) {
            $data['revolut_font_colour'] = $this->config->get('revolut_font_colour');
        } else {
            $data['revolut_font_colour'] = '#848484';
        }

        if (isset($this->request->post['revolut_logo_theme'])) {
            $data['revolut_logo_theme'] = $this->request->post['revolut_logo_theme'];
        } else {
            $data['revolut_logo_theme'] = $this->config->get('revolut_logo_theme');
        }

        if (isset($this->request->post['revolut_pending_status_id'])) {
            $data['revolut_pending_status_id'] = $this->request->post['revolut_pending_status_id'];
        } else {
            $data['revolut_pending_status_id'] = $this->config->get('revolut_pending_status_id');
        }

        if (isset($this->request->post['revolut_authorised_status_id'])) {
            $data['revolut_authorised_status_id'] = $this->request->post['revolut_authorised_status_id'];
        } else {
            $data['revolut_authorised_status_id'] = $this->config->get('revolut_authorised_status_id');
        }

        if (isset($this->request->post['revolut_completed_status_id'])) {
            $data['revolut_completed_status_id'] = $this->request->post['revolut_completed_status_id'];
        } else {
            $data['revolut_completed_status_id'] = $this->config->get('revolut_completed_status_id');
        }

        if (isset($this->request->post['revolut_processing_status_id'])) {
            $data['revolut_processing_status_id'] = $this->request->post['revolut_processing_status_id'];
        } else {
            $data['revolut_processing_status_id'] = $this->config->get('revolut_processing_status_id');
        }

        if (isset($this->request->post['revolut_refunded_status_id'])) {
            $data['revolut_refunded_status_id'] = $this->request->post['revolut_refunded_status_id'];
        } else {
            $data['revolut_refunded_status_id'] = $this->config->get('revolut_refunded_status_id');
        }

        if (isset($this->request->post['revolut_cancelled_status_id'])) {
            $data['revolut_cancelled_status_id'] = $this->request->post['revolut_cancelled_status_id'];
        } else {
            $data['revolut_cancelled_status_id'] = $this->config->get('revolut_cancelled_status_id');
        }

        if (isset($this->request->post['revolut_failed_status_id'])) {
            $data['revolut_failed_status_id'] = $this->request->post['revolut_failed_status_id'];
        } else {
            $data['revolut_failed_status_id'] = $this->config->get('revolut_failed_status_id');
        }

        $this->load->model('localisation/order_status');

        $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

        if (isset($this->request->post['revolut_geo_zone_id'])) {
            $data['revolut_geo_zone_id'] = $this->request->post['revolut_geo_zone_id'];
        } else {
            $data['revolut_geo_zone_id'] = $this->config->get('revolut_geo_zone_id');
        }

        $this->load->model('localisation/geo_zone');

        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

        if (isset($this->request->post['revolut_status'])) {
            $data['revolut_status'] = $this->request->post['revolut_status'];
        } else {
            $data['revolut_status'] = $this->config->get('revolut_status');
        }

        if (isset($this->request->post['revolut_sort_order'])) {
            $data['revolut_sort_order'] = $this->request->post['revolut_sort_order'];
        } else {
            $data['revolut_sort_order'] = $this->config->get('revolut_sort_order');
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $data['token'] = $this->session->data['token'];

        $this->response->setOutput($this->load->view('extension/payment/revolut', $data));
    }

    public function install() {
        $this->load->model('extension/payment/revolut');

        $this->model_extension_payment_revolut->install();

        $this->load->model('extension/event');

        $this->model_extension_event->addEvent('revolut', 'catalog/model/checkout/order/addOrderHistory/after', 'extension/payment/revolut/eventPostModelAddOrderHistory');
    }

    public function uninstall() {
        $this->load->model('extension/payment/revolut');

        $this->model_extension_payment_revolut->uninstall();

        $this->load->model('extension/event');
        
        $this->model_extension_event->deleteEvent('revolut');
    }

    public function setupWebhook() {
        $json = array();

        $this->load->model('extension/payment/revolut');
        $this->load->language('extension/payment/revolut');

        if (isset($this->request->get['setup'])) {
            $http_code = $this->model_extension_payment_revolut->setUpWebhook();

            if ($http_code == '200') {
                $json['success'] = $this->language->get('text_webhook_success');
            } else {
                $json['error'] = $this->getErrorMessage($http_code);
            }
        } elseif (isset($this->request->get['delete'])) {
            $http_code = $this->model_extension_payment_revolut->deleteWebhook();

            if ($http_code == '204') {
                $json['success'] = $this->language->get('text_webhook_delete_success');
            } else {
                $json['error'] = $this->getErrorMessage($http_code);
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function order() {
        if ($this->config->get('revolut_status')) {
            $this->load->model('sale/order');
            $this->load->model('extension/payment/revolut');

            $revolut_order = $this->model_extension_payment_revolut->getOrder($this->request->get['order_id']);

            if (!empty($revolut_order)) {
                $data = $this->load->language('extension/payment/revolut');

                $data['revolut_order'] = $revolut_order;

                $order_info = $this->model_sale_order->getOrder($this->request->get['order_id']);

                $data['order_id'] = $this->request->get['order_id'];
                $data['token'] = $this->session->data['token'];

                return $this->load->view('extension/payment/revolut_order', $data);
            }
        }
    }

    public function refund() {
        $json = array();

        $this->load->language('extension/payment/revolut');

        if (isset($this->request->get['order_id']) && !empty($this->request->post['refund_amount'])) {
            $this->load->model('sale/order');
            $this->load->model('extension/payment/revolut');

            if (!is_numeric($this->request->post['refund_amount'])) {
                $json['error'] = $this->language->get('error_invalid_refund_amount');
            }

            if (!$json) {
                $revolut_order_info = $this->model_extension_payment_revolut->getOrder($this->request->get['order_id']);

                if ($revolut_order_info) {
                    $http_code = $this->model_extension_payment_revolut->createRefund($revolut_order_info, $this->request->post['refund_amount']);

                    if ($http_code == '200' || $http_code == '201') {
                        $json['success'] = sprintf($this->language->get('text_refund_success'), $revolut_order_info['order_id']);
                    } else {
                        $json['error'] = $this->getErrorMessage($http_code);
                    }
                } else {
                    $json['error'] = $this->language->get('error_invalid_request');
                }
            }
        } else {
            $json['error'] = $this->language->get('error_invalid_request');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function validate() {
        if (!$this->user->hasPermission('modify', 'extension/payment/revolut')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->request->post['revolut_api_key']) {
            $this->error['api_key'] = $this->language->get('error_api_key');
        }

        return !$this->error;
    }

    private function getErrorMessage($http_code) {
        $this->load->language('extension/payment/revolut');

        if ($this->language->get('error_' . $http_code) == 'error_' . $http_code) {
            return sprintf($this->language->get('error_unknown'), $http_code);
        } else {
            return $this->language->get('error_' . $http_code);
        }
    }
}