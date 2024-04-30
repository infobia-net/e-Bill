<?php

require_once(DIR_SYSTEM . 'library/vendor/revolut/api_request.php');

class ControllerExtensionPaymentRevolut extends Controller
{
    public function getPaymentData($gateway)
    {
        $this->api_client = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));
        $this->load->model('checkout/order');

        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

        if (!$order_info) {
            $data['error'] = "Something went wrong";
            return $data;
        }

        $this->load->model('extension/payment/revolut');
        $payment_title = 'Revolut Pay';

        if ($gateway == 'revolut_card') {
            $this->load->language('extension/payment/revolut');
            $payment_title = $this->config->get('payment_revolut_payment_title') ? $this->config->get('payment_revolut_payment_title') : $this->language->get('text_title');
        }

        if ($gateway == 'revolut_prb') {
            $this->load->language('extension/payment/revolut_prb');
            $payment_title = $this->config->get('payment_revolut_payment_title') ? $this->config->get('payment_revolut_payment_title') : $this->language->get('text_title');
        }

        $this->model_extension_payment_revolut->updatePaymentMethodName($order_info['order_id'], $payment_title);
        $amount = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false) * 100;
        $result = $this->createRevolutOrder($order_info);
        $response = $result['response'];

        if (!isset($response['id'])) {
            $data['error'] = "Something went wrong";
            return $data;
        }

        $this->load->model('localisation/country');
        $country_info = $this->model_localisation_country->getCountry($order_info['payment_country_id']);
        $base_url = rtrim(HTTP_SERVER, '/');
        $base_url = str_replace(array('http://', 'https://'), '', $base_url);
        $data['revolut_id'] = $response['id'];
        $data['order_id'] = $order_info['order_id'];
        $data['public_token'] = $this->config->get('payment_revolut_api_public_key');
        $data['currency'] = $order_info['currency_code'];
        $data['currency_value'] = $order_info['currency_value'];
        $data['total_amount'] = $amount;
        $data['public_id'] = $response['public_id'];
        $data['name'] = $order_info['firstname'] . ' ' . $order_info['lastname'];
        $data['email'] = $order_info['email'];
        $data['phone'] = $order_info['telephone'];
        $data['countryCode'] = $country_info['iso_code_2'];
        $data['region'] = $order_info['payment_zone'];
        $data['city'] = $order_info['payment_city'];
        $data['streetLine1'] = $order_info['payment_address_1'];
        $data['streetLine2'] = $order_info['payment_address_2'];
        $data['postcode'] = $order_info['payment_postcode'];
        $data['mode'] = 'prod';
        $data['base_url'] = $base_url;
        $data['payment_revolut_card_background_colour'] = $this->config->get('payment_revolut_card_background_colour');
        $data['payment_revolut_card_font_colour'] = $this->config->get('payment_revolut_card_font_colour');
        $data['payment_revolut_card_logo_theme'] = $this->config->get('payment_revolut_card_logo_theme');
        
        $this->session->data['upsell_params'] = $data;

        if (isset($response['id'])) {
            $this->model_extension_payment_revolut->addOrder($response['id'], $data);
        }

        if ($this->config->get('payment_revolut_test')) {
            $data['mode'] = 'sandbox';
        }

        return $data;
    }

    public function paymentMethodPreprocessEventRevolut()
    {
        $this->api_client = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));
        
        //check if AMEX is available and update logos
        $this->api_client->setPublicKey($this->config->get('payment_revolut_api_public_key'));
        $result = $this->api_client->get("api/public/available-payment-methods?amount=0&currency=" . strtoupper($this->session->data['currency']));
        $amex_availability = isset($result['response']['available_card_brands']) && is_array($result['response']['available_card_brands']) && in_array('amex', $result['response']['available_card_brands']);
        $card_logos = '<img src="' . HTTPS_SERVER . 'catalog/view/theme/default/image/revolut/visa-logo.svg' . '" title="Visa" alt="Visa" class="img-responsive" style="width:30px;display:inline;margin-left:5px" />' . '<img src="' . HTTPS_SERVER . 'catalog/view/theme/default/image/revolut/master-card-logo.svg' . '" title="Mastercard" alt="Mastercard" class="img-responsive" style="width:30px;display:inline;margin-left:5px" />';
        
        if($amex_availability){
            $card_logos .= '<img src="' . HTTPS_SERVER . 'catalog/view/theme/default/image/revolut/amex-logo.svg' . '" title="Amex" alt="Amex" class="img-responsive" style="width:30px;display:inline;margin-left:5px" />';
        }
        $revolut_pay_logos = ' <img src="' . HTTPS_SERVER . 'catalog/view/theme/default/image/revolut/revolut.svg' . '" title="Revolut Pay" alt="Revolut Pay" class="img-responsive" style="display:inline;margin-left:5px" />' . $card_logos;
    
        $this->session->data['card_logos'] = $card_logos;
        $this->session->data['revolut_pay_logos'] = $revolut_pay_logos;

        $payment_methods_result = $this->api_client->get("api/public/available-payment-methods?amount=0&currency=" . strtoupper($this->session->data['currency']));
        $this->session->data['available_payment_methods'] = $payment_methods_result['response']['available_payment_methods'];
    }

    public function createRevolutOrder($order_info)
    {
        $amount = round($order_info['total'], 2);
        $currency = strtoupper($order_info['currency_code']);
        $order_capture_mode = "MANUAL";
        $cancel_after_time = "PT2M";

        if ($currency != 'JPY') {
            $amount = round($amount * 100);
        }

        $body = array(
            'amount' => (int) $amount,
            'currency' => $currency,
            'customer_id' => $this->getRevolutCustomerId(),
            'capture_mode' => $order_capture_mode,
            'merchant_order_ext_ref' => '#' . $order_info['order_id'],
            'email' => $order_info['email']
        );

        if($this->config->get('payment_revolut_capture_mode') == 'AUTOMATIC')
        {
            $body['cancel_authorised_after'] = $cancel_after_time;
        }

        $exist_order = $this->model_extension_payment_revolut->getOrderByOcOrderId($order_info['order_id']);

        if ($exist_order) {
            $result = $this->api_client->get('orders/' . $exist_order['revolut_id']);
            $response = $result['response'];

            if (isset($response['id']) && $response['state'] == 'PENDING') {
                $result = $this->api_client->patch("orders/{$exist_order['revolut_id']}", $body);
                $response = $result['response'];
                if (isset($response['id'])) {
                    return $result;
                }
            }

            $exist_order = $this->model_extension_payment_revolut->deleteOrderByOcOrderId($order_info['order_id']);
        }

        $result = $this->api_client->post('orders', $body);

        return $result;
    }

    public function webhook()
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data, true);

        if (empty($data['event']) || !$data['order_id'] || $data['event'] != 'ORDER_COMPLETED') {
            header("HTTP/2 401");
            exit;
        }

        $this->api_client = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));

        $this->load->model('checkout/order');
        $this->load->model('extension/payment/revolut');

        $order_info = $this->model_extension_payment_revolut->getOrderByRevolutOrderId($data['order_id']);

        if (empty($order_info['order_id'])) {
            header("HTTP/2 404");
            exit;
        }

        $oc_order_id = $order_info['order_id'];
        $order_info = $this->model_checkout_order->getOrder($oc_order_id);
        $order_status_id = $this->config->get('payment_revolut_completed_status_id');
        $comment = 'Revolut Payment Gateway - Transaction Type: ' . $data['event'] . '. Transaction ID: ' . $data['order_id'];

        $order_history_info = $this->model_extension_payment_revolut->getOrderHistory($oc_order_id, $order_status_id, $comment);

        if (!$order_history_info) {
            $this->model_checkout_order->addOrderHistory($oc_order_id, $order_status_id, $comment);
        }

        header("HTTP/2 200");
    }

    public function captureRevolutOrder($revolut_id)
    {
        if ($this->config->get('payment_revolut_capture_mode') == 'MANUAL') {
            return;
        }

        $order = $this->api_client->get('orders/' . $revolut_id);
        $order = $order['response'];

        if ($order['state'] == 'AUTHORISED') {
            $this->api_client->post('orders/' . $revolut_id . '/capture');
        }
    }

    public function paymentResult($order_id, $publicId)
    {
        $this->api_client = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));

        $paymentResults = array();

        $this->load->model('checkout/order');
        $this->load->model('extension/payment/revolut');

        $this->load->language('extension/payment/revolut_pay');

        $revolut_order_info = $this->model_extension_payment_revolut->getOrderByRevolutPublicId($publicId);
        $revolut_id = $revolut_order_info['revolut_id'];
        $order_info = $this->model_checkout_order->getOrder($order_id);

        if (!$order_info || !$revolut_id || !$revolut_order_info) {
            $paymentResults['error'] = $this->language->get('error_missing_order');
            return $paymentResults;
        }

        $this->captureRevolutOrder($revolut_id);
        $order_status_id = $this->config->get('payment_revolut_pending_status_id');
        $comment = '';

        for ($i = 1; $i <= 9; $i++) {
            $result = $this->api_client->get('orders/' . $revolut_id);
            $response = $result['response'];

            if (empty($response['id'])) {
                continue;
            }

            if ($response['state'] == 'COMPLETED') {
                $order_status_id = $this->config->get('payment_revolut_completed_status_id');

                $paymentResults['success'] = true;
                $paymentResults['redirect'] = $this->url->link('checkout/success', '', true);

                $comment = 'Revolut Payment Gateway - Order Payment Completed. Transaction ID: ' . $revolut_id;
                $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment);
                break;
            }

            if ($response['state'] == 'AUTHORISED' && $this->config->get('payment_revolut_capture_mode') == 'MANUAL') {
                $order_status_id = $this->config->get('payment_revolut_authorised_status_id');

                $paymentResults['success'] = true;
                $paymentResults['redirect'] = $this->url->link('checkout/success', '', true);

                $comment = 'Revolut Payment Gateway - Order Payment Authorised. Transaction ID: ' . $revolut_id;
                $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment);
                break;
            }

            if ($response['state'] == 'FAILED' || $response['state'] == 'CANCELLED' || $response['state'] == 'PENDING') {
                $order_status_id = $this->config->get('payment_revolut_failed_status_id');
                $paymentResults['error'] = $this->language->get('error_failed');
                $comment = 'Revolut Payment Gateway - ' . $paymentResults['error'] . '. Transaction ID: ' . $revolut_id;
                $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment);
                break;
            }

            if ($i == 9 && ($response['state'] == 'PROCESSING' || $response['state'] == 'IN_SETTLEMENT')) {
                $order_status_id = $this->config->get('payment_revolut_pending_status_id');

                if ($response['state'] == 'PROCESSING') {
                    $order_status_id = $this->config->get('payment_revolut_processing_status_id');
                }

                $paymentResults['success'] = true;
                $paymentResults['redirect'] = $this->url->link('checkout/success', '', true);

                $comment = 'Revolut Payment Gateway - ' . $this->language->get('error_too_long') . ' Transaction ID: ' . $revolut_id;
                $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment);
                break;
            }

            sleep(3);
        }

        return $paymentResults;
    }

    public function completeOrder()
    {

        if (empty($this->session->data['order_id']) || empty($this->request->post['public_id'])) {
            $paymentResults['error'] = $this->language->get('error_invalid');
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($paymentResults));
            return;
        }

        $order_id = $this->session->data['order_id'];
        $publicId = $this->request->post['public_id'];

        $paymentResults = $this->paymentResult($order_id, $publicId);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($paymentResults));
    }

    public function eventPostModelAddOrderHistory($route, &$args)
    {
        $this->api_client = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));

        $order_id = $args[0];
        $order_status_id = $args[1];

        $this->load->model('checkout/order');
        $this->load->model('extension/payment/revolut');

        $revolut_order_info = $this->model_extension_payment_revolut->getRevolutOrder($order_id);

        if (
            $this->config->get('payment_revolut_capture_mode') != 'MANUAL'
            || $order_status_id != $this->config->get('payment_revolut_capture_status_id')
            || isset($this->session->data['revolut_capture'])
            || !$revolut_order_info['revolut_id']
        ) {
            return;
        }

        $result = $this->api_client->post('orders/' . $revolut_order_info['revolut_id'] . '/capture');
        $response = $result['response'];

        if (isset($response['state']) && $response['state'] == 'COMPLETED') {
            $comment = 'Revolut Payment Gateway - Payment Captured. Transaction State: ' . $response['state'] . '. Transaction ID: ' . $response['id'];
            $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment);
        }
    }
    public function injectUpsellScriptConfirmationPage($route, &$args)
    {
        if (!$this->config->get('payment_revolut_upsell_banner_enabled'))
            return;

        $upsell_embed_file = "https://merchant.revolut.com/upsell/embed.js";
        if ($this->config->get('payment_revolut_test')) {
            $upsell_embed_file = "https://sandbox-merchant.revolut.com/upsell/embed.js";
        }

        $this->document->addScript($upsell_embed_file, 'header');
        $this->document->addScript('catalog/view/javascript/revolut_upsell_banner.js', 'header');
    }
    public function upsellBannerHandler()
    {
        if (isset($this->session->data['upsell_params'])) {
            $upsell_params = $this->session->data['upsell_params'];
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($upsell_params));
            return;
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode(404));
    }
    public function appRedirection()
    {

        $publicId = isset($this->request->get['_rp_oid']) ? $this->request->get['_rp_oid'] : null;
        if (!$publicId) {
            return $this->displayError("public_id was not passed");
        }

        if (isset($this->request->get['_rp_fr'])) {
            $error_message = $this->request->get['_rp_fr'];
            $this->displayError($error_message);
            return;
        }

        $order_id = isset($this->session->data['order_id']) ? $this->session->data['order_id'] : false;
        $paymentResult = $this->paymentResult($order_id, $publicId);

        if (isset($paymentResult['success'])) {
            $this->response->redirect($paymentResult['redirect']);
        }

        $this->displayError($paymentResult['error']);
    }

    public function createRevolutCustomer($billing_phone, $billing_email)
    {
        $this->api_client = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));
        $revolut_log = new Log('revolut.log');
        $revolut_customer_id = "";
        try {
            if (empty($billing_phone) || empty($billing_email)) {
                return;
            }
            $body = [
                'phone' => $billing_phone,
                'email' => $billing_email,
            ];
            try {
                $create_customer = $this->api_client->post('/customers', $body);
            } catch (Exception $e) {
                $revolut_log->write('createRevolutCustomer : Customer email already registered or api call failed. error : ' . $e->getMessage());
            }
            if (!empty($create_customer['response']['id'])) {
                $revolut_customer_id = $create_customer['response']['id'];
            }

            return $revolut_customer_id;
        } catch (Exception $e) {
            $this->log_error('createRevolutCustomer: ' . $e->getMessage());
        }
    }

    public function getRevolutCustomerId()
    {
        $revolut_log = new Log('revolut.log');
        $this->api_client = new ApiRequest($this->config->get('payment_revolut_api_key'), $this->config->get('payment_revolut_test'));
        $this->load->model('checkout/order');
        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
        try {
            $customer_email = $order_info['email'];
            $customer_phone = $order_info['telephone'];

            $revolut_customer_search = $this->api_client->get('/customers?term=' . $customer_email);

            $revolut_customer_id = !empty($revolut_customer_search['response'][0]['id']) ? $revolut_customer_search['response'][0]['id'] : '';
            if (!empty($revolut_customer_id)) {
                $revolut_customer = $this->api_client->get('/customers/' . $revolut_customer_id);
                $phone_number_exist = isset($revolut_customer['response']['phone']);
                $phone_number_mismatch = $phone_number_exist && $revolut_customer['response']['phone'] !== $customer_phone;

                if ($phone_number_mismatch || !$phone_number_exist) {
                    $body = ['phone' => $customer_phone];
                    $this->api_client->patch("/customers/$revolut_customer_id", $body);
                }
            }

            if (empty($revolut_customer_id)) {
                $revolut_customer_id = $this->createRevolutCustomer($customer_phone, $customer_email);
            }
            return $revolut_customer_id;
        } catch (Exception $e) {
            $revolut_log->write('should_createRevolutCustomer : ' . $e->getMessage());
        }
    }
    public function displayError($message)
    {
        $data['heading_title'] = "Something went wrong while taking the payment";
        $data['text_error'] = "Error: " . $message;
        $data['button_continue'] = "Back to checkout";
        $data['continue'] = $this->url->link('checkout/checkout');
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('extension/payment/revolut_error', $data));
    }
}
