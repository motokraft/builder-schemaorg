<?php namespace Motokraft\BuilderSchemaOrg\Intangible;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\BuilderSchemaOrg\Traits\ImageObjectTrait;
use \Motokraft\BuilderSchemaOrg\Intangible\Rating\AggregateRating;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Review;

class VirtualLocation extends Thing
{
    use ImageObjectTrait;

    protected $name;
    protected $description;
    protected $url;
    protected $sameAs = [];
    protected $image;

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

    function setSameAs(string $value)
    {
        array_push($this->sameAs, $value);
        return $this;
    }
}