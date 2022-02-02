<?php namespace Motokraft\BuilderSchemaOrg\Thing;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\Intangible\Brand;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Review;
use \Motokraft\BuilderSchemaOrg\Intangible\Rating\AggregateRating;
use \Motokraft\BuilderSchemaOrg\Intangible\Offer;

class Product extends Thing
{
    protected $name;
    protected $image = [];
    protected $description;
    protected $sku;
    protected $mpn;
    protected $brand;
    protected $review;
    protected $aggregateRating;
    protected $offers;

    function __construct()
    {
        parent::__construct();
        $this->image = new Collections;
    }

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function setImage(ImageObject $value)
    {
        $this->image->push($value);
        return $value;
    }

    function setDescription(string $value)
    {
        $this->set('description', $value);
        return $this;
    }

    function setSku(string $value)
    {
        $this->set('sku', $value);
        return $this;
    }

    function setMpn(string $value)
    {
        $this->set('mpn', $value);
        return $this;
    }

    function setBrand(Brand $value)
    {
        $this->set('brand', $value);
        return $value;
    }

    function setReview(Review $value)
    {
        $this->set('review', $value);
        return $value;
    }

    function setAggregateRating(AggregateRating $value)
    {
        $this->set('aggregateRating', $value);
        return $value;
    }

    function setOffer(Offer $value)
    {
        $this->set('offers', $value);
        return $value;
    }
}