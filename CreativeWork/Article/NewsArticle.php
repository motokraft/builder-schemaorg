<?php namespace Motokraft\BuilderSchemaOrg\CreativeWork\Article;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\BuilderSchemaOrg\Thing\Person;
use \Motokraft\BuilderSchemaOrg\Thing\Organization;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\Traits\ImageObjectTrait;

class NewsArticle extends Thing
{
    use ImageObjectTrait;

    protected $mainEntityOfPage;
    protected $headline;
    protected $image;
    protected $description;
    protected $datePublished;
    protected $dateModified;
    protected $author;
    protected $publisher;

    function __construct()
    {
        $this->image = new Collections;
    }

    function setMainEntityOfPage(string $value)
    {
        $this->set('mainEntityOfPage', $value);
        return $this;
    }

    function setHeadline(string $value)
    {
        $this->set('headline', $value);
        return $this;
    }

    function setDescription(string $value)
    {
        $this->set('description', $value);
        return $this;
    }

    function setDatePublished(string $value)
    {
        $this->set('datePublished', $value);
        return $this;
    }

    function setDateModified(string $value)
    {
        $this->set('dateModified', $value);
        return $this;
    }

    function setAuthor(Person $value)
    {
        $this->set('author', $value);
        return $value;
    }

    function setPublisher(Organization $value)
    {
        $this->set('publisher', $value);
        return $value;
    }

    function getMainEntityOfPage($default = null)
    {
        return $this->get('mainEntityOfPage', $default);
    }

    function getHeadline($default = null)
    {
        return $this->get('headline', $default);
    }

    function getDescription($default = null)
    {
        return $this->get('description', $default);
    }

    function getDatePublished($default = null)
    {
        return $this->get('datePublished', $default);
    }

    function getDateModified($default = null)
    {
        return $this->get('dateModified', $default);
    }

    function getAuthor($default = null)
    {
        return $this->get('author', $default);
    }

    function getPublisher($default = null)
    {
        return $this->get('publisher', $default);
    }
}