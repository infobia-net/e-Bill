<?php
/*
 * How to get the currently activated payment methods for the Payments API.
 */

try {
    /*
     * Initialize the Revolut API library with your API key.
     *
     * See: https://www.revolut.com/dashboard/developers/api-keys
     */
    require "../initialize.php";
    /*
     * Get all the activated methods for this API key.
     * By default we are using the resource "payments".
     * See the orders folder for an example with the Orders API.
     */
    $methods = $revolut->methods->allActive();
    foreach ($methods as $method) {
        echo '<div style="line-height:40px; vertical-align:top">';
        echo '<img src="' . htmlspecialchars($method->image->size1x) . '" srcset="' . htmlspecialchars($method->image->size2x) . ' 2x"> ';
        echo htmlspecialchars($method->description) . ' (' . htmlspecialchars($method->id) . ')';
        echo '</div>';
    }
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . htmlspecialchars($e->getMessage());
}
