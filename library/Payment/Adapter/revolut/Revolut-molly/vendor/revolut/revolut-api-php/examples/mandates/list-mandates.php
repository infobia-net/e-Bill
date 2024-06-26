<?php
/*
 * List all customer mandates
 */

try {
    /*
     * Initialize the Revolut API library with your API key or OAuth access token.
     */
    require "../initialize.php";

    /*
     * Retrieve an existing customer by his customerId
     */
    $customer = $revolut->customers->get("cst_cUa8HjKBus");

    /*
     * List the mandates of this customer
     */
    echo "<ul>";
    foreach ($customer->mandates() as $mandate) {
        echo "<li>" . htmlspecialchars($mandate->id) . " - " . htmlspecialchars($mandate->method) . ": " . htmlspecialchars($mandate->status) . "</li>";
    }
    echo "</ul>";
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . htmlspecialchars($e->getMessage());
}
