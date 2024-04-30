<?php
/*
 * Make sure to disable the display of errors in production code!
 */
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/functions.php";

/*
 * Initialize the Revolut API library with your API key.
 *
 * See: https://www.revolut.com/dashboard/developers/api-keys
 */
$revolut = new \Revolut\Api\RevolutApiClient();
$revolut->setApiKey("test_dHar4XY7LxsDOtmnkVtjNVWXLSlXsM");
