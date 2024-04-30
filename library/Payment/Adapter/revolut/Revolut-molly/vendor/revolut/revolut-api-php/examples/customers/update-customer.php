<?php
/*
 * Updating an existing customer via the Revolut API.
 */

try {
    /*
     * Initialize the Revolut API library with your API key or OAuth access token.
     */
    require "../initialize.php";

    /*
     * Retrieve an existing customer by his customerId
     */
    $customer = $revolut->customers->get("cst_cUe8HjeBuz");

    /**
     * Customer fields that can be updated.
     *
     * @See https://docs.revolut.com/reference/v2/customers-api/update-customer
     */
    $customer->name = "Luke Sky";
    $customer->email = "luke@example.org";
    $customer->locale = "en_US";
    $customer->metadata->isJedi = true;
    $customer->update();

    echo "<p>Customer updated: " . htmlspecialchars($customer->name) . "</p>";
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . htmlspecialchars($e->getMessage());
}
