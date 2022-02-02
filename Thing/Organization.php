<?php namespace Motokraft\BuilderSchemaOrg\Thing;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\ContactPoint;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;

class Organization extends Thing
{
    protected $name;
    protected $description;
    protected $url;
    protected $logo;
    protected $email;
    protected $address;
    protected $founder;
    protected $foundingDate;
    protected $sameAs = [];
    protected $contactPoint;

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function setDescription(string $value)
    {
        $this->set('description', $value);
        return $this;
    }

    function setUrl(string $value)
    {
        $this->set('url', $value);
        return $this;
    }

    function setLogo(ImageObject $value)
    {
        $this->set('logo', $value);
        return $value;
    }

    function setEmail(string $value)
    {
        $this->set('email', $value);
        return $this;
    }

    function setAddress(PostalAddress $value)
    {
        $this->set('address', $value);
        return $value;
    }

    function setFounder(Person $value)
    {
        $this->set('founder', $value);
        return $value;
    }

    function setFoundingDate(string $value)
    {
        $this->set('foundingDate', $value);
        return $this;
    }

    function setSameAs(string $value)
    {
        if(in_array($value, $this->sameAs))
        {
            return $this;
        }

        array_push($this->sameAs, $value);
        return $this;
    }

    function setContactPoint(ContactPoint $value)
    {
        $this->set('contactPoint', $value);
        return $value;
    }

    function getName($default = null)
    {
        return $this->get('name', $default);
    }

    function getDescription($default = null)
    {
        return $this->get('description', $default);
    }

    function getLogo($default = null)
    {
        return $this->get('logo', $default);
    }

    function getEmail($default = null)
    {
        return $this->get('email', $default);
    }

    function getAddress($default = null)
    {
        return $this->get('address', $default);
    }

    function getFounder($default = null)
    {
        return $this->get('founder', $default);
    }

    function getSameAs($default = [])
    {
        return $this->get('sameAs', $default);
    }

    function getContactPoint($default = null)
    {
        return $this->get('contactPoint', $default);
    }
}