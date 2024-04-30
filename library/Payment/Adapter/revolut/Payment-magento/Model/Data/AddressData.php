<?php

namespace Revolut\Payment\Model\Data;

use Magento\Directory\Model\CountryFactory;
use Magento\Framework\Exception\LocalizedException;

class AddressData extends \Magento\Payment\Model\Info implements \Revolut\Payment\Api\Data\AddressDataInterface
{
        
    /**
     * @var CountryFactory
     */
    private $countryFactory;

    public function __construct(CountryFactory $countryFactory)
    {
        $this->countryFactory = $countryFactory;
    }
    /**
     * @return array
     */
    public function getFormattedAddress()
    {
        if (empty($this->getRecipient())) {
            $firstName = null;
            $lastName = null;
        } else {
            list($firstName, $lastName) = $this->parseName($this->getRecipient()); // @phpstan-ignore-line
        }

        if (empty($this->getRegion())) {
            $regionId = null;
        } else {
            $regionId = $this->getRegionIdBy($this->getRegion(), $this->getCountry()); // @phpstan-ignore-line
        }

        $address['postalCode'] = $this->getPostcode();
        $address['phone'] = $this->getPhone();

        return [
            'firstname' => $firstName,
            'lastname' => $lastName,
            'email' => $this->getEmail(),
            'street' => !empty($this->getAddress()) ? $this->getAddress() : '',
            'city' => $this->getCity(),
            'region_id' => $regionId,
            'region' => $this->getRegion(),
            'postcode' => $this->getPostcode(),
            'country_id' => $this->getCountry(),
            'telephone' => $this->getPhone(),
            'fax' => ''
        ];
    }

     /**
      * @param string $name
      * @return array
      */
    public function parseName($name)
    {
        if (empty($name) || empty(trim($name))) {
            throw new LocalizedException(__("Invalid name"));
        }
  
        // @phpstan-ignore-next-line
        $nameParts = explode(' ', preg_replace('!\s+!', ' ', (string)trim($name)));
        
        // @phpstan-ignore-next-line
        if (count($nameParts) == 0) {
            throw new LocalizedException(__("Invalid name."));
        }
  
        $firstName = array_shift($nameParts);
  
        if (empty($firstName)) {
            throw new LocalizedException(__("Invalid name."));
        }
  
        $lastName = "";
  
        if ($nameParts) {
            $lastName =  array_shift($nameParts);
        }
  
        if (empty($lastName)) {
            $lastName = "lastname";
        }
  
        return [$firstName, $lastName];
    }
  
    /**
     * @param string $regionName
     * @param string $regionCountry
     * @return string|null
     */
    public function getRegionIdBy($regionName, $regionCountry)
    {
        $regions = $this->getRegionsForCountry($regionCountry);
  
        $regionName = strtolower(trim($regionName));
  
        if (isset($regions['names'][$regionName])) {
            return $regions['names'][$regionName];
        } elseif (isset($regions['codes'][$regionName])) {
            return $regions['codes'][$regionName];
        }
  
        return null;
    }
  
    /**
     * @param string $countryCode
     * @return array
     */
    public function getRegionsForCountry($countryCode)
    {
        $country = $this->countryFactory->create()->loadByCode($countryCode);
  
        $values = [];
  
        foreach ($country->getRegions() as $region) {
            $values['codes'][trim($region->getCode())] = $region->getId();
            $values['names'][trim($region->getName())] = $region->getId();
        }
  
        return $values;
    }

    /**
     * Get street line
     *
     * @return string|mixed
     */
    public function getStreetLine1()
    {
        return $this->getData(self::KEY_STREET_LINE);
    }
    
    /**
     * Get street line 2
     *
     * @return string|mixed
     */
    public function getStreetLine2()
    {
        return $this->getData(self::KEY_STREET_LINE_2);
    }
    
    /**
     * Set street line
     *
     * @param string $addressLine
     * @return $this
     */
    public function setAddressLine($addressLine)
    {
        $this->setData(self::KEY_STREET_LINE, $addressLine);
        return $this;
    }
    
    /**
     * Get street line
     *
     * @return string[]|mixed
     */
    public function getAddressLine()
    {
        return $this->getData(self::KEY_STREET_LINE);
    }
    
    /**
     * Set street line
     *
     * @param string $streetLine
     * @return $this
     */
    public function setStreetLine1($streetLine)
    {
        $this->setData(self::KEY_STREET_LINE, $streetLine);
        return $this;
    }
    
    /**
     * Set street line 2
     *
     * @param string $streetLine
     * @return $this
     */
    public function setStreetLine2($streetLine)
    {
        $this->setData(self::KEY_STREET_LINE_2, $streetLine);
        return $this;
    }
    
    /**
     * Get Email
     *
     * @return string|mixed
     */
    public function getEmail()
    {
        return $this->getData(self::KEY_EMAIL);
    }
    
    /**
     * Set Email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->setData(self::KEY_EMAIL, $email);
        return $this;
    }
    
    /**
     * Get street line
     *
     * @return string|mixed
     */
    public function getAddress()
    {
        return $this->getData(self::KEY_STREET_LINE);
    }
    
    /**
     * Set street line
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->setData(self::KEY_STREET_LINE, $address);
        return $this;
    }
    
    /**
     * Get street line 2
     *
     * @return string|mixed
     */
    public function getAddress2()
    {
        return $this->getData(self::KEY_STREET_LINE);
    }
    
    /**
     * Set street line 2
     *
     * @param string $address
     * @return $this
     */
    public function setAddress2($address)
    {
        $this->setData(self::KEY_STREET_LINE_2, $address);
        return $this;
    }
    
    /**
     * Get Recipient
     *
     * @return string|mixed
     */
    public function getRecipient()
    {
        return $this->getData(self::KEY_RECIPIENT);
    }
    
    /**
     * Set street line
     *
     * @param string $recipient
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->setData(self::KEY_RECIPIENT, $recipient);
        return $this;
    }

    /**
     * Get postcode
     *
     * @return string|mixed
     */
    public function getPostcode()
    {
        return $this->getData(self::KEY_POSTCODE);
    }
    
    /**
     * Set postcode
     * @param string $postcode
     * @return $this;
     */
    public function setPostcode($postcode)
    {
        $this->setData(self::KEY_POSTCODE, $postcode);
        return $this;
    }
    
    /**
     * Get postcode
     *
     * @return string|mixed
     */
    public function getPostalCode()
    {
        return $this->getPostcode();
    }
    
    /**
     * Set postcode
     *
     * @param string $postcode
     * @return $this
     */
    public function setPostalCode($postcode)
    {
        $this->setPostcode($postcode);
        return $this;
    }
    
    /**
     * Get city
     *
     * @return string|mixed
     */
    public function getCity()
    {
        return $this->getData(self::KEY_CITY);
    }
    
    /**
     * Set city
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->setData(self::KEY_CITY, $city);
        return $this;
    }
    
    /**
     * Get city
     *
     * @return string|mixed
     */
    public function getDependentLocality()
    {
        return $this->getData(self::KEY_DEPEND_LOCALITY);
    }
    
    /**
     * Set city
     *
     * @param string $locality
     * @return $this
     */
    public function setDependentLocality($locality)
    {
        $this->setData(self::KEY_DEPEND_LOCALITY, $locality);
        return $this;
    }
    
    /**
     * Get Country
     *
     * @return string|mixed
     */
    public function getCountry()
    {
        return $this->getData(self::KEY_COUNTRY);
    }
    
    /**
     * Set Country
     *
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->setData(self::KEY_COUNTRY, $country);
        return $this;
    }
    
    /**
     * Get State
     *
     * @return string|mixed
     */
    public function getState()
    {
        return $this->getData(self::KEY_STATE);
    }
    
    /**
     * Set State
     *
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->setData(self::KEY_STATE, $state);
        return $this;
    }
    
    /**
     * Get State
     *
     * @return string|mixed
     */
    public function getRegion()
    {
        return $this->getData(self::KEY_STATE);
    }
    
    /**
     * Set State
     *
     * @param string $state
     * @return $this
     */
    public function setRegion($state)
    {
        $this->setData(self::KEY_STATE, $state);
        return $this;
    }
    
    /**
     * Get State
     *
     * @return string|mixed
     */
    public function getPhone()
    {
        return $this->getData(self::KEY_PHONE);
    }
    
    /**
     * Set State
     *
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->setData(self::KEY_PHONE, $phone);
        return $this;
    }
    
    /**
     * Get Sorting Code
     *
     * @return string|mixed
     */
    public function getSortingCode()
    {
        return $this->getData(self::KEY_SORTING_CODE);
    }
    
    /**
     * Set Sorting Code
     *
     * @param string $sortingCode
     * @return $this
     */
    public function setSortingCode($sortingCode)
    {
        $this->setData(self::KEY_SORTING_CODE, $sortingCode);
        return $this;
    }
}
