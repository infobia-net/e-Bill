<?php
/*
 * Refund some items for an order using the Revolut API.
 */

try {
    /*
     * Initialize the Revolut API library with your API key or OAuth access token.
     */
    require "../initialize.php";

    /*
     * Refund 1 item of order line "odl_dgtxyl" for an order with ID "ord_8wmqcHMN4U".
     *
     * See: https://docs.revolut.com/reference/v2/orders-api/create-order-refund
     */

    $order = $revolut->orders->get('ord_8wmqcHMN4U');
    $refund = $order->refund([
        'lines' => [
            [
                'id' => 'odl_dgtxyl',
                'quantity' => 1,
            ],
        ],
        "description" => "Required quantity not in stock, refunding one photo book.",
    ]);

    echo 'Refund ' . $refund->id . ' was created for part of your order ' . $order->id;
    echo 'You will receive ' . $refund->amount->currency . $refund->amount->value;
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . htmlspecialchars($e->getMessage());
}
