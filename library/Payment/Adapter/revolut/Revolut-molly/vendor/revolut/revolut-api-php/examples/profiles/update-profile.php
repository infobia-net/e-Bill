<?php
/*
 * Updating an existing profile via the Revolut API.
 */
try {
    /*
     * Initialize the Revolut API library with your API key or OAuth access token.
     */
    require "../initialize_with_oauth.php";

    /*
     * Retrieve an existing profile by his profileId
     */
    $profile = $revolut->profiles->get("pfl_eA4MSz7Bvy");

    /**
     * Profile fields that can be updated.
     *
     * @See https://docs.revolut.com/reference/v2/profiles-api/update-profile
     */
    $profile->name = "Revolut B.V.";
    $profile->website = 'www.revolut.com';
    $profile->email = 'info@revolut.com';
    $profile->phone = '0612345670';
    $profile->businessCategory = "MARKETPLACES";
    $profile->update();
    echo "<p>Profile updated: " . htmlspecialchars($profile->name) . "</p>";
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "<p>API call failed: " . htmlspecialchars($e->getMessage()) . "</p>";
}
