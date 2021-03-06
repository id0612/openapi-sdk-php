<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveRegistrantProfile
 *
 * @method string getCountry()
 * @method string getAddress()
 * @method string getTelArea()
 * @method string getCity()
 * @method string getRegistrantProfileId()
 * @method string getTelephone()
 * @method string getDefaultRegistrantProfile()
 * @method string getRegistrantOrganization()
 * @method string getTelExt()
 * @method string getProvince()
 * @method string getPostalCode()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getEmail()
 * @method string getRegistrantName()
 */
class SaveRegistrantProfile extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain-intl';

    /**
     * @var string
     */
    public $version = '2017-12-18';

    /**
     * @var string
     */
    public $action = 'SaveRegistrantProfile';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

    /**
     * @deprecated deprecated since version 2.0, Use withCountry() instead.
     *
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        return $this->withCountry($country);
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function withCountry($country)
    {
        $this->data['Country'] = $country;
        $this->options['query']['Country'] = $country;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAddress() instead.
     *
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        return $this->withAddress($address);
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function withAddress($address)
    {
        $this->data['Address'] = $address;
        $this->options['query']['Address'] = $address;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTelArea() instead.
     *
     * @param string $telArea
     *
     * @return $this
     */
    public function setTelArea($telArea)
    {
        return $this->withTelArea($telArea);
    }

    /**
     * @param string $telArea
     *
     * @return $this
     */
    public function withTelArea($telArea)
    {
        $this->data['TelArea'] = $telArea;
        $this->options['query']['TelArea'] = $telArea;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCity() instead.
     *
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        return $this->withCity($city);
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function withCity($city)
    {
        $this->data['City'] = $city;
        $this->options['query']['City'] = $city;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegistrantProfileId() instead.
     *
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function setRegistrantProfileId($registrantProfileId)
    {
        return $this->withRegistrantProfileId($registrantProfileId);
    }

    /**
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function withRegistrantProfileId($registrantProfileId)
    {
        $this->data['RegistrantProfileId'] = $registrantProfileId;
        $this->options['query']['RegistrantProfileId'] = $registrantProfileId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTelephone() instead.
     *
     * @param string $telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        return $this->withTelephone($telephone);
    }

    /**
     * @param string $telephone
     *
     * @return $this
     */
    public function withTelephone($telephone)
    {
        $this->data['Telephone'] = $telephone;
        $this->options['query']['Telephone'] = $telephone;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDefaultRegistrantProfile() instead.
     *
     * @param string $defaultRegistrantProfile
     *
     * @return $this
     */
    public function setDefaultRegistrantProfile($defaultRegistrantProfile)
    {
        return $this->withDefaultRegistrantProfile($defaultRegistrantProfile);
    }

    /**
     * @param string $defaultRegistrantProfile
     *
     * @return $this
     */
    public function withDefaultRegistrantProfile($defaultRegistrantProfile)
    {
        $this->data['DefaultRegistrantProfile'] = $defaultRegistrantProfile;
        $this->options['query']['DefaultRegistrantProfile'] = $defaultRegistrantProfile;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegistrantOrganization() instead.
     *
     * @param string $registrantOrganization
     *
     * @return $this
     */
    public function setRegistrantOrganization($registrantOrganization)
    {
        return $this->withRegistrantOrganization($registrantOrganization);
    }

    /**
     * @param string $registrantOrganization
     *
     * @return $this
     */
    public function withRegistrantOrganization($registrantOrganization)
    {
        $this->data['RegistrantOrganization'] = $registrantOrganization;
        $this->options['query']['RegistrantOrganization'] = $registrantOrganization;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTelExt() instead.
     *
     * @param string $telExt
     *
     * @return $this
     */
    public function setTelExt($telExt)
    {
        return $this->withTelExt($telExt);
    }

    /**
     * @param string $telExt
     *
     * @return $this
     */
    public function withTelExt($telExt)
    {
        $this->data['TelExt'] = $telExt;
        $this->options['query']['TelExt'] = $telExt;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProvince() instead.
     *
     * @param string $province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        return $this->withProvince($province);
    }

    /**
     * @param string $province
     *
     * @return $this
     */
    public function withProvince($province)
    {
        $this->data['Province'] = $province;
        $this->options['query']['Province'] = $province;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPostalCode() instead.
     *
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        return $this->withPostalCode($postalCode);
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function withPostalCode($postalCode)
    {
        $this->data['PostalCode'] = $postalCode;
        $this->options['query']['PostalCode'] = $postalCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEmail() instead.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->withEmail($email);
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function withEmail($email)
    {
        $this->data['Email'] = $email;
        $this->options['query']['Email'] = $email;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegistrantName() instead.
     *
     * @param string $registrantName
     *
     * @return $this
     */
    public function setRegistrantName($registrantName)
    {
        return $this->withRegistrantName($registrantName);
    }

    /**
     * @param string $registrantName
     *
     * @return $this
     */
    public function withRegistrantName($registrantName)
    {
        $this->data['RegistrantName'] = $registrantName;
        $this->options['query']['RegistrantName'] = $registrantName;

        return $this;
    }
}
