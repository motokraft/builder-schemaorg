<?php namespace Motokraft\BuilderSchemaOrg\Thing;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\Traits\ImageObjectTrait;

class Person extends Thing
{
    use ImageObjectTrait;

    protected $name;
    protected $additionalName;
    protected $address;
    protected $affiliation;
    protected $email;
    protected $gender;
    protected $jobTitle;
    protected $image;
    protected $sameAs = [];
    protected $url;

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function setAdditionalName(string $value)
    {
        $this->set('additionalName', $value);
        return $this;
    }

    function setAddress(PostalAddress $value)
    {
        $this->set('address', $value);
        return $value;
    }

    function setAffiliation(Organization $value)
    {
        $this->set('affiliation', $value);
        return $value;
    }

    function setEmail(string $value)
    {
        $this->set('email', $value);
        return $value;
    }

    function setGender(string $value)
    {
        $this->set('gender', $value);
        return $this;
    }

    function setJobTitle(string $value)
    {
        $this->set('jobTitle', $value);
        return $this;
    }

    function setSameAs(string $value)
    {
        array_push($this->sameAs, $value);
        return $this;
    }

    function setUrl(string $value)
    {
        $this->set('url', $value);
        return $this;
    }

    function getName($default = null)
    {
        return $this->get('name', $default);
    }

    function getAdditionalName($default = null)
    {
        return $this->get('additionalName', $default);
    }

    function getAddress($default = null)
    {
        return $this->get('address', $default);
    }

    function getEmail($default = null)
    {
        return $this->get('email', $default);
    }

    function getGender($default = null)
    {
        return $this->get('gender', $default);
    }

    function getJobTitle($default = null)
    {
        return $this->get('jobTitle', $default);
    }

    function getImage($default = null)
    {
        return $this->get('image', $default);
    }

    function getSameAs($default = null)
    {
        return $this->get('sameAs', $default);
    }

    function getUrl($default = null)
    {
        return $this->get('url', $default);
    }
}