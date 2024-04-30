<?php
/*
 * Retrieve a shipment using the Revolut API.
 */

try {
    /*
     * Initialize the Revolut API library with your API key or OAuth access token.
     */
    require "../initialize.php";

    /*
     * Retrieve a shipment with ID "shp_3wmsgCJN4U" for the order with ID "ord_8wmqcHMN4U".
     *
     * See: https://docs.revolut.com/reference/v2/shipments-api/get-shipment
     */

    $order = $revolut->orders->get('ord_8wmqcHMN4U');
    $shipment = $order->getShipment("shp_3wmsgCJN4U");

    echo 'Shipment with ID ' . $shipment->id. ' for order with ID ' . $order->id . '.';
    foreach ($shipment->lines as $line) {
        echo $line->name . ' - status: <b>' . $line->status . '</b>.';
    }
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . htmlspecialchars($e->getMessage());
}
