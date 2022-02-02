<?php namespace Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\ContactPoint;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class PostalAddress extends Thing
{
    protected $addressCountry;
    protected $postalCode;
    protected $streetAddress;
    protected $addressLocality;
    protected $addressRegion;

    function setAddressCountry(string $value)
    {
        $this->set('addressCountry', $value);
        return $this;
    }

    function setPostalCode(string $value)
    {
        $this->set('postalCode', $value);
        return $this;
    }

    function setStreetAddress(string $value)
    {
        $this->set('streetAddress', $value);
        return $this;
    }

    function setAddressLocality(string $value)
    {
        $this->set('addressLocality', $value);
        return $this;
    }

    function setAddressRegion(string $value)
    {
        $this->set('addressRegion', $value);
        return $this;
    }

    function getAddressCountry($default = null)
    {
        return $this->get('addressCountry', $default);
    }

    function getPostalCode($default = null)
    {
        return $this->get('postalCode', $default);
    }

    function getStreetAddress($default = null)
    {
        return $this->get('streetAddress', $default);
    }

    function getAddressLocality($default = null)
    {
        return $this->get('addressLocality', $default);
    }

    function getAddressRegion($default = null)
    {
        return $this->get('addressRegion', $default);
    }
}