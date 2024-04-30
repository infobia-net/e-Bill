<?php
class ApiRequest
{
    public $version = '1.3.1';

    private $api_key;
    private $public_key;
    private $base_url;
    private $api_url;

    public function __construct($api_key, $test_mode, $api_base_path = 'api/1.0/')
    {
        $this->api_key = $api_key;

        if (!$test_mode) {
            $this->base_url = 'https://merchant.revolut.com/';
        } else {
            $this->base_url = 'https://sandbox-merchant.revolut.com/';
        }

        $this->api_url = $this->base_url . $api_base_path;
    }
    public function getApiBaseUrl()
    {
        return $this->base_url;
    }

    public function post($path, $body = null)
    {
        return $this->request($path, 'POST', $body);
    }

    public function patch($path, $body)
    {
        return $this->request($path, 'PATCH', $body);
    }

    public function get($path)
    {
        return $this->request($path, 'GET', null);
    }

    public function delete($path)
    {
        return $this->request($path, 'DELETE');
    }

    public function setPublicKey($public_key)
    {
        $this->public_key = $public_key;
    }

    private function request($path, $method, $body = null)
    {
        $revolut_log = new Log('revolut.log');

        if (empty($this->api_key)) {
            return array();
        }

        $api_key = $this->api_key;        
        $curl_url = $this->api_url . $path;
        
        if('api/public-key/latest' === $path){
            $curl_url = $this->base_url . $path;
        }

        if(strpos($path, "public/")){
            $api_key = $this->public_key;
            $curl_url = $this->base_url . $path;
        }
        
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'User-Agent: Revolut Payment Gateway/v' . $this->version . '; OpenCart/v' . VERSION . '; PHP/' . phpversion() . '; cURL/' . curl_version()['version'] . '; Merchant/' . HTTPS_SERVER,
            'Authorization: Bearer ' . $api_key
        );
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $curl_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        if ($body != null) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
            curl_setopt($curl, CURLOPT_POST, 1);
        } elseif ($method == 'POST' && $body == null) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, '');
        }

        if ($method == 'DELETE') {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
        }

        $response = curl_exec($curl);
        $response = json_decode($response, true);
        $http_code = trim(curl_getinfo($curl, CURLINFO_HTTP_CODE));

        curl_close($curl);

        if ($http_code >= 400 && $http_code < 500 && $method != 'GET') {
            $revolut_log->write('API Request Error: Failed request to URL ' . $method . ' ' . $curl_url);
            $revolut_log->write($response);
        }

        return array(
            'http_code' => $http_code,
            'response'  => $response,
        );
    }
}
