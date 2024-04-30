<?php
require_once(DIR_SYSTEM . 'library/vendor/revolut/api_request.php');

class ControllerExtensionPaymentRevolut extends Controller {
    public function index() {
        $this->load->language('extension/payment/revolut');

        $data['text_testmode'] = $this->language->get('text_testmode');
        $data['button_confirm'] = $this->language->get('button_confirm');
        $data['error_unknown_ajax'] = $this->language->get('error_unknown_ajax');
        $data['testmode'] = $this->config->get('revolut_test');
        $data['payment_view'] = $this->config->get('revolut_payment_view');
        $data['text_card_details'] = $this->language->get('text_card_details');
        $data['svg_logo'] = $this->getSVGImage();

        if ($this->config->get('revolut_customise') && $this->config->get('revolut_background_colour')) {
            $data['background_colour'] = $this->config->get('revolut_background_colour');
        } else {
            $data['background_colour'] = '#ffffff';
        }

        if ($this->config->get('revolut_customise') && $this->config->get('revolut_font_colour')) {
            $data['font_colour'] = $this->config->get('revolut_font_colour');
        } else {
            $data['font_colour'] = '#848484';
        }

        $this->load->model('checkout/order');

        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

        if ($order_info) {
            $this->load->model('extension/payment/revolut');

            $this->model_extension_payment_revolut->updatePaymentMethodName($order_info['order_id']);

            $api_request = new ApiRequest($this->config->get('revolut_api_key'), $this->config->get('revolut_test'));

            $amount = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false) * 100;

            $body = array(
                'amount'                 => (int)((string)$amount),
                'currency'               => $order_info['currency_code'],
                'capture_mode'           => $this->config->get('revolut_capture_mode'),
                'merchant_order_ext_ref' => $order_info['order_id'] . '-' . time(),
                'email'                  => $order_info['email'],
                'settlement_currency'    => $order_info['currency_code']
            );

            $result = $api_request->post('orders', $body);

            $response = $result['response'];
            $http_code = $result['http_code'];

            if ($http_code == '201') {
                $this->load->model('localisation/country');

                $country_info = $this->model_localisation_country->getCountry($order_info['payment_country_id']);

                $data['revolut_id']  = $response['id'];
                $data['public_id']   = $response['public_id'];
                $data['name']        = $order_info['firstname'] . ' ' . $order_info['lastname'];
                $data['email']       = $order_info['email'];
                $data['phone']       = $order_info['telephone'];
                $data['countryCode'] = $country_info['iso_code_2'];
                $data['region']      = $order_info['payment_zone'];
                $data['city']        = $order_info['payment_city'];
                $data['streetLine1'] = $order_info['payment_address_1'];
                $data['streetLine2'] = $order_info['payment_address_2'];
                $data['postcode']    = $order_info['payment_postcode'];

                $order_amount = (float)((int)$response['order_amount']['value'] / 100);

                if (!$this->config->get('revolut_test')) {
                    $data['mode'] = 'prod';
                } else {
                    $data['mode'] = 'sandbox';
                }

                $revolut_order_id = $this->model_extension_payment_revolut->addOrder($response['id'], $order_info);
                
                $this->model_extension_payment_revolut->addTransaction($revolut_order_id, $response['state'], $order_amount);
            } else {
                $data['error'] = $this->getErrorMessage($http_code);
            }

            return $this->load->view('extension/payment/revolut', $data);
        }
    }

    public function webhook() {
        $data = file_get_contents("php://input");

        if (!empty($data)) {
            $data = json_decode($data, true);

            $this->load->model('checkout/order');
            $this->load->model('extension/payment/revolut');

            if (!empty($data['order_id']) && !empty($data['merchant_order_ext_ref'])) {
                $revolut_id = $data['order_id'];
                $order_id = explode('-', $data['merchant_order_ext_ref'])[0];

                $revolut_order_info = $this->model_extension_payment_revolut->getOrder($order_id, $revolut_id);
                $order_info = $this->model_checkout_order->getOrder($order_id);

                if ($order_info && $revolut_order_info) {
                    switch ($data['event']) {
                        case 'ORDER_COMPLETED':
                            $status = 'COMPLETED';
                            $order_status_id = $this->config->get('revolut_completed_status_id');

                            break;
                        
                        case 'ORDER_AUTHORISED':
                            $status = 'AUTHORISED';
                            $order_status_id = $this->config->get('revolut_authorised_status_id');

                            break;
                        
                        case 'ORDER_PAYMENT_AUTHENTICATED':
                            $status = 'PROCESSING';
                            $order_status_id = $this->config->get('revolut_processing_status_id');

                            break;
                        
                        case 'ORDER_PAYMENT_DECLINED':
                            $status = 'CANCELLED';
                            $order_status_id = $this->config->get('revolut_cancelled_status_id');

                            break;
                        
                        case 'ORDER_PAYMENT_FAILED':
                            $status = 'FAILED';
                            $order_status_id = $this->config->get('revolut_failed_status_id');

                            break;
                        default:
                            $status = '';
                            $order_status_id = 0;
                    }

                    if (!empty($status)) {
                        $this->model_extension_payment_revolut->addTransaction($revolut_order_info['revolut_order_id'], $status, $revolut_order_info['total']);
                    }

                    $comment = 'Revolut Payment Gateway - Transaction Type: ' . $data['event'] . '. Transaction ID: ' . $revolut_id;

                    // Do not change status for cancelled orders with order status ID 0
                    if ((!$order_info['order_status_id'] && !empty($status) && $status != 'FAILED' && $status != 'CANCELLED') || $order_info['order_status_id']) {
                        $order_history_info = $this->model_extension_payment_revolut->getOrderHistory($order_id, $order_status_id, $comment);

                        if (!$order_history_info) {
                            $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment);
                        }
                    } else {
                        $this->model_extension_payment_revolut->addOrderHistory($order_id, $order_status_id, $comment);
                    }
                }
            }
        }
    }

    public function completeOrder() {
        $json = array();

        $this->load->model('checkout/order');
        $this->load->model('extension/payment/revolut');

        $this->load->language('extension/payment/revolut');

        if (!empty($this->session->data['order_id']) && !empty($this->request->post['revolut_id'])) {
            $order_id = $this->session->data['order_id'];
            $revolut_id = $this->request->post['revolut_id'];

            $revolut_order_info = $this->model_extension_payment_revolut->getOrder($order_id, $revolut_id);
            $order_info = $this->model_checkout_order->getOrder($order_id);

            if ($order_info && $revolut_order_info) {
                $order_status_id = $this->config->get('revolut_pending_status_id');
                $comment = '';

                $api_request = new ApiRequest($this->config->get('revolut_api_key'), $this->config->get('revolut_test'));

                for ($i = 1; $i <= 9; $i++) {
                    $result = $api_request->get('orders/' . $revolut_order_info['revolut_id']);

                    $http_code = $result['http_code'];
                    $response = $result['response'];

                    if ($http_code == '200') {
                        if ($response['state'] == 'COMPLETED' && $this->config->get('revolut_capture_mode') == 'AUTOMATIC') {
                            $order_status_id = $this->config->get('revolut_completed_status_id');

                            $json['success'] = true;
                            $json['redirect'] = $this->url->link('checkout/success', '', true);

                            $comment = 'Revolut Payment Gateway - Order Payment Completed. Transaction ID: ' . $revolut_id;

                            $this->model_extension_payment_revolut->addTransaction($revolut_order_info['revolut_order_id'], 'COMPLETED', $revolut_order_info['total']);

                            break;
                        } elseif ($response['state'] == 'AUTHORISED' && $this->config->get('revolut_capture_mode') == 'MANUAL') {
                            $order_status_id = $this->config->get('revolut_authorised_status_id');

                            $json['success'] = true;
                            $json['redirect'] = $this->url->link('checkout/success', '', true);

                            $comment = 'Revolut Payment Gateway - Order Payment Authorised. Transaction ID: ' . $revolut_id;

                            $this->model_extension_payment_revolut->addTransaction($revolut_order_info['revolut_order_id'], 'AUTHORISED', $revolut_order_info['total']);

                            break;
                        } elseif ($i == 9 && ($response['state'] == 'PROCESSING' || $response['state'] == 'PENDING' || $response['state'] == 'IN_SETTLEMENT')) {
                            if ($response['state'] == 'PROCESSING') {
                                $order_status_id = $this->config->get('revolut_processing_status_id');
                            } else {
                                $order_status_id = $this->config->get('revolut_pending_status_id');
                            }
                            
                            $json['success'] = true;
                            $json['redirect'] = $this->url->link('checkout/success', '', true);

                            $comment = 'Revolut Payment Gateway - ' . $this->language->get('error_too_long') . ' Transaction ID: ' . $revolut_id;

                            break;
                        } elseif ($response['state'] == 'FAILED' || $response['state'] == 'CANCELLED') {
                            if ($response['state'] == 'FAILED') {
                                $order_status_id = $this->config->get('revolut_failed_status_id');
                                $json['error'] = $this->language->get('error_failed');
                            } else {
                                $order_status_id = $this->config->get('revolut_cancelled_status_id');
                                $json['error'] = $this->language->get('error_cancelled');
                            }

                            $this->model_extension_payment_revolut->addTransaction($revolut_order_info['revolut_order_id'], $response['state'], $revolut_order_info['total']);

                            break;
                        }
                    } else {
                        $order_status_id = $this->config->get('revolut_failed_status_id');

                        $json['error'] = $this->language->get('error_status_check');
                    }

                    sleep(2);
                }

                $order_info = $this->model_checkout_order->getOrder($order_id);

                if (isset($json['success'])) {
                    if (!$order_info['order_status_id']) {
                        $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment);
                    }
                } elseif (isset($json['error'])) {
                    $comment = 'Revolut Payment Gateway - ' . $json['error'] . '. Transaction ID: ' . $revolut_id;
                    
                    if (!$order_info['order_status_id']) {
                        $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment);
                    } else {
                        $this->model_extension_payment_revolut->addOrderHistory($order_id, $order_status_id, $comment);
                    }
                }
            } else {
                $json['error'] = $this->language->get('error_missing_order');
            }
        } else {
            $json['error'] = $this->language->get('error_invalid');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function eventPostModelAddOrderHistory($route, &$args) {
        $order_id = $args[0];
        $order_status_id = $args[1];

        $this->load->model('checkout/order');

        $order_info = $this->model_checkout_order->getOrder($order_id);

        if ($order_info && $order_info['order_status_id'] && $order_status_id && $this->config->get('revolut_capture_mode') == 'MANUAL' && $order_status_id == $this->config->get('revolut_capture_status_id') && !isset($this->session->data['revolut_capture'])) {
            $this->load->model('extension/payment/revolut');

            $revolut_order_info = $this->model_extension_payment_revolut->getRevolutOrder($order_id);

            if ($revolut_order_info) {
                $api_request = new ApiRequest($this->config->get('revolut_api_key'), $this->config->get('revolut_test'));

                $result = $api_request->post('orders/' . $revolut_order_info['revolut_id'] . '/capture');

                $http_code = $result['http_code'];
                $response = $result['response'];

                if ($http_code == '200' && $response['state'] == 'COMPLETED') {
                    $comment = 'Revolut Payment Gateway - Payment Captured. Transaction State: ' . $response['state'] . '. Transaction ID: ' . $response['id'];

                    $order_history_info = $this->model_extension_payment_revolut->getOrderHistory($order_id, $this->config->get('revolut_capture_status_id'), $comment);

                    if (!$order_history_info) {
                        $this->session->data['revolut_capture'] = true;
                        $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment);
                    }
                }
            }
        } else {
            unset($this->session->data['revolut_capture']);
        }
    }

    private function getErrorMessage($http_code) {
        $this->load->language('extension/payment/revolut');

        if ($this->language->get('error_' . $http_code) == 'error_' . $http_code) {
            return sprintf($this->language->get('error_unknown'), $http_code);
        } else {
            return $this->language->get('error_' . $http_code);
        }
    }

    private function getSVGImage() {
        if ($this->config->get('revolut_customise') && $this->config->get('revolut_logo_theme')) {
            $logo_colour = $this->config->get('revolut_logo_theme');
        } else {
            $logo_colour = '#7a7a7a';
        }

        return '<svg width="94" height="17" viewBox="0 0 94 17" fill="' . $logo_colour. '" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.68302 12V9.714H3.22202C4.49102 9.714 5.30102 8.895 5.30102 7.689C5.30102 6.519 4.50902 5.7 3.22202 5.7H0.900024V12H1.68302ZM1.68302 6.411H3.12302C3.96902 6.411 4.49102 6.879 4.49102 7.689C4.49102 8.535 3.99602 8.994 3.12302 8.994H1.68302V6.411Z" />
                    <path d="M7.92129 12.081C9.36129 12.081 10.0003 11.019 10.0003 9.705C10.0003 8.382 9.34329 7.32 7.92129 7.32C6.49929 7.32 5.84229 8.382 5.84229 9.705C5.84229 11.028 6.48129 12.081 7.92129 12.081ZM7.92129 11.406C6.99429 11.406 6.60729 10.695 6.60729 9.705C6.60729 8.724 6.98529 7.995 7.92129 7.995C8.85729 7.995 9.23529 8.715 9.23529 9.705C9.23529 10.695 8.85729 11.406 7.92129 11.406Z" />
                    <path d="M12.534 12L13.641 8.427H13.677L14.757 12H15.54L16.836 7.491V7.401H16.071L15.153 10.974H15.117L14.037 7.401H13.263L12.183 10.974H12.147L11.229 7.401H10.446V7.491L11.751 12H12.534Z" />
                    <path d="M19.374 12.081C20.355 12.081 21.165 11.514 21.291 10.668H20.535C20.409 11.154 19.977 11.406 19.374 11.406C18.519 11.406 18.078 10.803 18.078 9.93H21.354V9.561C21.354 8.283 20.661 7.32 19.365 7.32C17.943 7.32 17.286 8.373 17.286 9.705C17.286 11.055 18.015 12.081 19.374 12.081ZM18.087 9.3C18.114 8.58 18.501 7.995 19.365 7.995C20.184 7.995 20.571 8.571 20.571 9.3H18.087Z" />
                    <path d="M23.1878 12V9.768C23.1878 8.688 23.5838 8.076 24.4568 8.076H24.8168V7.347H24.4028C23.8358 7.347 23.3768 7.662 23.1878 8.175H23.1518L23.0888 7.401H22.4318V12H23.1878Z" />
                    <path d="M27.3109 12.081C28.2919 12.081 29.1019 11.514 29.2279 10.668H28.4719C28.3459 11.154 27.9139 11.406 27.3109 11.406C26.4559 11.406 26.0149 10.803 26.0149 9.93H29.2909V9.561C29.2909 8.283 28.5979 7.32 27.3019 7.32C25.8799 7.32 25.2229 8.373 25.2229 9.705C25.2229 11.055 25.9519 12.081 27.3109 12.081ZM26.0239 9.3C26.0509 8.58 26.4379 7.995 27.3019 7.995C28.1209 7.995 28.5079 8.571 28.5079 9.3H26.0239Z" />
                    <path d="M31.9617 12.081C32.6457 12.081 33.1047 11.766 33.3477 11.361H33.3837L33.4827 12H34.1397V5.34H33.3837V8.04H33.3477C33.1047 7.635 32.6457 7.32 31.9617 7.32C30.6657 7.32 30.0177 8.337 30.0087 9.696C30.0177 11.181 30.7557 12.081 31.9617 12.081ZM32.0877 11.406C31.1337 11.406 30.7737 10.623 30.7737 9.696C30.7737 8.778 31.1337 7.995 32.0877 7.995C33.0057 7.995 33.4017 8.787 33.4017 9.696C33.4017 10.614 33.0057 11.406 32.0877 11.406Z" />
                    <path d="M40.1847 12.081C41.3907 12.081 42.1287 11.181 42.1377 9.696C42.1287 8.337 41.4807 7.32 40.1847 7.32C39.5007 7.32 39.0417 7.635 38.7987 8.04H38.7627V5.34H38.0067V12H38.6637L38.7627 11.361H38.7987C39.0417 11.766 39.5007 12.081 40.1847 12.081ZM40.0587 11.406C39.1407 11.406 38.7447 10.614 38.7447 9.696C38.7447 8.787 39.1407 7.995 40.0587 7.995C41.0127 7.995 41.3727 8.778 41.3727 9.696C41.3727 10.623 41.0127 11.406 40.0587 11.406Z" />
                    <path d="M44.3326 14.061L46.8796 7.491V7.401H46.0875L44.7375 11.01H44.7015L43.3065 7.401H42.4965V7.491L44.3415 11.946L44.3505 11.964L43.5676 13.971V14.061H44.3326Z" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M59.0134 13.0369L56.793 9.12191C58.1976 8.60604 58.8939 7.70677 58.8939 6.39711C58.8954 4.79652 57.6336 3.77778 55.6244 3.77778H51.6981V13.0369H53.4318V9.28037H54.9032L57.0304 13.0369H59.0134ZM55.6244 5.31189C56.6488 5.31189 57.1613 5.72178 57.1613 6.52858C57.1613 7.33537 56.6483 7.74526 55.6244 7.74526H53.4318V5.31189H55.6244ZM82.044 13.0371V3.9604H80.3892V13.0371H82.044ZM78.5549 7.06465C77.8585 6.44281 77.018 6.13889 76.0461 6.13889C75.0876 6.13889 74.247 6.44331 73.5502 7.06465C72.8538 7.673 72.5 8.51977 72.5 9.60449C72.5 10.6892 72.8538 11.5355 73.5502 12.1574C74.2465 12.7657 75.0876 13.0701 76.0461 13.0701C77.018 13.0701 77.8585 12.7657 78.5549 12.1574C79.2646 11.5355 79.6185 10.6892 79.6185 9.60449C79.6185 8.51977 79.2641 7.673 78.5549 7.06465ZM74.7332 10.9931C74.366 10.6362 74.1811 10.1729 74.1811 9.60449C74.1811 9.03565 74.3645 8.57276 74.7332 8.22885C75.1005 7.87195 75.5346 7.69998 76.0456 7.69998C76.557 7.69998 77.0041 7.87195 77.3719 8.22885C77.752 8.57276 77.9368 9.03565 77.9368 9.60449C77.9368 10.1733 77.7535 10.6362 77.3719 10.9931C77.0046 11.3371 76.5576 11.509 76.0456 11.509C75.5346 11.509 75.1015 11.3371 74.7332 10.9931ZM87.3855 10.0976V6.47599H89.0443V10.3755C89.0443 11.8566 88.1001 13.2218 86.0384 13.2218H86.0255C83.9509 13.2218 83.0052 11.8861 83.0052 10.3755V6.47599H84.6631V10.0976C84.6631 10.9708 85.1191 11.5487 86.0255 11.5487C86.9172 11.5487 87.3855 10.9703 87.3855 10.0976ZM70.6804 6.47599L69.0255 10.9204L67.3707 6.47599H65.6107L68.2514 13.0368H69.8017L72.4418 6.47599H70.6804ZM64.7265 7.2166C65.3177 7.83844 65.6196 8.61874 65.6196 9.571H65.6191V10.1533H60.603C60.708 11.1586 61.4044 11.7934 62.3891 11.7934C63.1901 11.7934 63.7818 11.3965 64.1883 10.5897L65.4223 11.3041C64.8063 12.5872 63.7952 13.2221 62.3629 13.2221C61.4306 13.2221 60.6426 12.9046 59.9855 12.2563C59.3417 11.6085 59.0135 10.7752 59.0135 9.75644C59.0135 8.73771 59.3411 7.91792 59.9984 7.26959C60.6684 6.62175 61.4832 6.29084 62.4417 6.29084C63.3745 6.29084 64.1352 6.59476 64.7265 7.2166ZM64.0956 8.93616C63.9385 8.08937 63.3204 7.56051 62.3882 7.56051C61.5342 7.56051 60.8522 8.15586 60.602 8.93616H64.0956ZM89.9207 11.2769C89.9207 12.3511 90.7845 13.2214 91.8496 13.2214H92.9945V11.7398H92.142C91.8288 11.7398 91.5755 11.4848 91.5755 11.1699V7.82728H92.9945V6.47813H91.5755V4.70308H89.9207V11.2769Z" />
                </svg>';
    }
}