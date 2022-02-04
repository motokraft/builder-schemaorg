<?php namespace Motokraft\BuilderSchemaOrg\Organization\LocalBusiness\FoodEstablishment;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Review;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\GeoCoordinates;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification;
use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\BuilderSchemaOrg\Traits\ImageObjectTrait;

class Restaurant extends Thing
{
    use ImageObjectTrait;

    protected $name;
    protected $image;
    protected $address;
    protected $review;
    protected $geo;
    protected $url;
    protected $telephone;
    protected $servesCuisine;
    protected $priceRange;
    protected $openingHoursSpecification;
    protected $menu;

    function __construct()
    {
        $this->openingHoursSpecification = new Collections;
        $this->image = new Collections;
    }

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function setAddress(PostalAddress $value)
    {
        $this->set('address', $value);
        return $value;
    }

    function setReview(Review $value)
    {
        $this->set('review', $value);
        return $value;
    }

    function setGeo(GeoCoordinates $value)
    {
        $this->set('geo', $value);
        return $value;
    }

    function setUrl(string $value)
    {
        $this->set('url', $value);
        return $this;
    }

    function setTelephone(string $value)
    {
        $this->set('telephone', $value);
        return $this;
    }

    function setServesCuisine(string $value)
    {
        $this->set('servesCuisine', $value);
        return $this;
    }

    function setPriceRange(string $value)
    {
        $this->set('priceRange', $value);
        return $this;
    }

    function setOpeningHoursSpecification(OpeningHoursSpecification $value)
    {
        $this->openingHoursSpecification->push($value);
        return $value;
    }

    function setMenuLink(string $value)
    {
        $this->set('menu', $value);
        return $this;
    }
}