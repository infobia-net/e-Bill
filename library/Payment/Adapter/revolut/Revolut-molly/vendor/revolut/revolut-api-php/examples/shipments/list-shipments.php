<?php
/*
 * List shipment for an order using the Revolut API.
 */

try {
    /*
     * Initialize the Revolut API library with your API key or OAuth access token.
     */
    require "../initialize.php";

    /*
     * Listing shipments for the order with ID "ord_8wmqcHMN4U".
     *
     * See: https://docs.revolut.com/reference/v2/shipments-api/get-shipment
     */

    $order = $revolut->orders->get('ord_8wmqcHMN4U');
    $shipments = $order->shipments();

    echo 'Shipments for order with ID ' . $order->id . ':';
    foreach ($shipments as $shipment) {
        echo 'Shipment ' . $shipment->id . '. Items:';
        foreach ($shipment->lines as $line) {
            echo $line->name . ' - status: <b>' . $line->status . '</b>.';
        }
    }
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . htmlspecialchars($e->getMessage());
}
