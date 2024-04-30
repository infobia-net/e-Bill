<?php

namespace Revolut\Payment\Api\Data;

/**
 * Interface AddressValidationWebhookInterface
 * @api
 */
interface AddressDataInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    public const KEY_STREET_LINE = 'street_line_1';

    public const KEY_STREET_LINE_2 = 'street_line_2';

    public const KEY_POSTCODE = 'postcode';
    
    public const KEY_CITY = 'city';

    public const KEY_DEPEND_LOCALITY = 'city';

    public const KEY_COUNTRY = 'country';

    public const KEY_STATE = 'state';

    public const KEY_RECIPIENT = 'recipient';

    public const KEY_EMAIL = 'email';

    public const KEY_PHONE = 'phone';

    public const KEY_SORTING_CODE = 'sorting_code';

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail();
    
    /**
     * Set Email
     *
     * @param String|mixed $email
     * @return $this
     */
    public function setEmail($email);

    /**
     * Get street line
     *
     * @return string
     */
    public function getStreetLine1();
    
    /**
     * Get street line 2
     *
     * @return string
     */
    public function getStreetLine2();
    
    /**
     * Set street line
     *
     * @param String|mixed $streetLine
     * @return $this
     */
    public function setStreetLine1($streetLine);
    
    /**
     * Set street line 2
     *
     * @param String|mixed $streetLine
     * @return $this
     */
    public function setStreetLine2($streetLine);
    
    /**
     * Get address
     *
     * @return string
     */
    public function getAddress();
    
    /**
     * Set address
     *
     * @param String|mixed $address
     * @return $this
     */
    public function setAddress($address);
        
    /**
     * Get address
     *
     * @return string
     */
    public function getAddress2();
    
    /**
     * Set address
     *
     * @param String|mixed $address
     * @return $this
     */
    public function setAddress2($address);
    
    /**
     * Get recipient
     *
     * @return string
     */
    public function getRecipient();
    
    /**
     * Set recipient
     *
     * @param String|mixed $recipient
     * @return $this
     */
    public function setRecipient($recipient);
    
    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode();
    
    /**
     * Set postcode
     *
     * @param String|mixed $postcode
     * @return $this
     */
    public function setPostcode($postcode);
    
    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostalCode();
    
    /**
     * Set postcode
     *
     * @param String|mixed $postcode
     * @return $this
     */
    public function setPostalCode($postcode);
    
    /**
     * Get city
     *
     * @return string
     */
    public function getDependentLocality();
    
    /**
     * Set city
     *
     * @param String|mixed $locality
     * @return $this
     */
    public function setDependentLocality($locality);
    
    /**
     * Get city
     *
     * @return string
     */
    public function getCity();
    
    /**
     * Set city
     *
     * @param String|mixed $city
     * @return $this
     */
    public function setCity($city);
    
    /**
     * Get Country
     *
     * @return string
     */
    public function getCountry();
    
    /**
     * Set Country
     *
     * @param String|mixed $country
     * @return $this
     */
    public function setCountry($country);
    
    /**
     * Get State
     *
     * @return string
     */
    public function getState();
    
    /**
     * Set State
     *
     * @param String|mixed $state
     * @return $this
     */
    public function setState($state);
    
    /**
     * Get State
     *
     * @return string
     */
    public function getRegion();
    
    /**
     * Set State
     *
     * @param String|mixed $state
     * @return $this
     */
    public function setRegion($state);
    
    /**
     * Get Phone
     *
     * @return string
     */
    public function getPhone();
    
    /**
     * Set Phone
     *
     * @param String|mixed $phone
     * @return $this
     */
    public function setPhone($phone);
    
    /**
     * Get Sorting Code
     *
     * @return string
     */
    public function getSortingCode();
    
    /**
     * Set Sorting Code
     *
     * @param String|mixed $sortingCode
     * @return $this
     */
    public function setSortingCode($sortingCode);
}
