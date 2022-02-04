<?php namespace Motokraft\BuilderSchemaOrg\Intangible;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\BuilderSchemaOrg\Intangible\Rating\AggregateRating;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Review;

class Brand extends Thing
{
    protected $name;
    protected $aggregateRating;
    protected $logo;
    protected $review;
    protected $slogan;

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function setAggregateRating(AggregateRating $value)
    {
        $this->set('aggregateRating', $value);
        return $value;
    }

    function setLogo(ImageObject $value)
    {
        $this->set('logo', $value);
        return $value;
    }

    function setReview(Review $value)
    {
        $this->set('review', $value);
        return $value;
    }

    function setSlogan(string $value)
    {
        $this->set('slogan', $value);
        return $this;
    }

    function getName($default = null)
    {
        return $this->get('name', $default);
    }

    function getAggregateRating($default = null)
    {
        return $this->get('aggregateRating', $default);
    }

    function getLogo($default = null)
    {
        return $this->get('logo', $default);
    }

    function getReview($default = null)
    {
        return $this->get('review', $default);
    }

    function getSlogan($default = null)
    {
        return $this->get('slogan', $default);
    }
}