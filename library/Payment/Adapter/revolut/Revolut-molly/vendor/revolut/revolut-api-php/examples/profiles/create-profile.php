<?php
/*
 * Create a profile via the Revolut API.
 */
try {
    /*
     * Initialize the Revolut API library with your API key or OAuth access token.
     */
    require "../initialize_with_oauth.php";

    /**
     * Create the profile
     *
     * @See https://docs.revolut.com/reference/v2/profiles-api/create-profile
     */
    $profile = $revolut->profiles->create([
        "name" => "My website name",
        "website" => "https://www.mywebsite.com",
        "email" => "info@mywebsite.com",
        "phone" => "+31208202070",
        "businessCategory" => "MARKETPLACES",
        "mode" => "live",
    ]);
    echo "<p>Profile created: " . htmlspecialchars($profile->name) . "</p>";
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "<p>API call failed: " . htmlspecialchars($e->getMessage()) . "</p>";
}
