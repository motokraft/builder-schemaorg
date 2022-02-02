<?php namespace Motokraft\BuilderSchemaOrg\Intangible\StructuredValue;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class ContactPoint extends Thing
{
    protected $contactType;
    protected $email;
    protected $url;

    function setContactType(string $value)
    {
        $this->set('contactType', $value);
        return $this;
    }

    function setEmail(string $value)
    {
        $this->set('email', $value);
        return $this;
    }

    function setUrl(string $value)
    {
        $this->set('url', $value);
        return $this;
    }

    function getContactType($default = null)
    {
        return $this->get('contactType', $default);
    }

    function getEmail($default = null)
    {
        return $this->get('email', $default);
    }

    function getUrl($default = null)
    {
        return $this->get('url', $default);
    }
}