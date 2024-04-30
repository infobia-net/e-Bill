<?php
/*
 * Delete a profile via the Revolut API.
 */
try {
    /*
     * Initialize the Revolut API library with your API key or OAuth access token.
     */
    require "../initialize_with_oauth.php";

    /**
     * Delete a profile via the profileId
     *
     * @See https://docs.revolut.com/reference/v2/profiles-api/delete-profile
     */
    $profile = $revolut->profiles->delete("pfl_v9hTwCvYqw");
    echo "<p>Profile deleted</p>";
} catch (\Revolut\Api\Exceptions\ApiException $e) {
    echo "<p>API call failed: " . htmlspecialchars($e->getMessage()) . "</p>";
}
