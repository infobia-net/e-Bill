<?php
/*
 * Delete a customer from the Revolut API.
 */

try {
    /*
     * Initialize the Revolut API library with your API key or OAuth access token.
     */
    require "../initialize.php";

    $revolut->customers->delete("cst_fE3F6nvX");
    echo "<p>Customer deleted!</p>";
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . htmlspecialchars($e->getMessage());
}
