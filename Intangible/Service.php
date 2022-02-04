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
use \Motokraft\BuilderSchemaOrg\Intangible\Brand;
use \Motokraft\BuilderSchemaOrg\Thing\Organization;
use \Motokraft\BuilderSchemaOrg\Thing\Person;
use \Motokraft\BuilderSchemaOrg\Thing\Product;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\Intangible\Offer;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Review;

class Service extends Thing
{
    protected $aggregateRating;
    protected $brand;
    protected $broker;
    protected $isRelatedTo;
    protected $isSimilarTo;
    protected $logo;
    protected $offers;
    protected $provider;
    protected $review;
    protected $slogan;

    function __construct()
    {
        $this->isRelatedTo = new Collections;
        $this->isSimilarTo = new Collections;
    }

    function setAggregateRating(AggregateRating $value)
    {
        $this->set('aggregateRating', $value);
        return $value;
    }

    function setBrand(Brand $value)
    {
        $this->set('brand', $value);
        return $value;
    }

    function setBroker(Organization|Person $value)
    {
        $this->set('broker', $value);
        return $value;
    }

    function addRelatedTo(Product|Service $value)
    {
        $this->isRelatedTo->push($value);
        return $value;
    }

    function addSimilarTo(Product|Service $value)
    {
        $this->isSimilarTo->push($value);
        return $value;
    }

    function setLogo(array $data)
    {
        $image = new ImageObject;

        if(isset($data['url']))
        {
            $image->setUrl($data['url']);
        }

        if(isset($data['width']))
        {
            $image->setWidth($data['width']);
        }

        if(isset($data['height']))
        {
            $image->setHeight($data['height']);
        }

        return $this->setLogoObject($image);
    }

    function setLogoObject(ImageObject $value)
    {
        $this->set('logo', $value);
        return $value;
    }

    function setOffer(Offer $value)
    {
        $this->set('offers', $value);
        return $value;
    }

    function setProvider(Organization|Person $value)
    {
        $this->set('provider', $value);
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
}