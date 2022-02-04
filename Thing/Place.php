<?php namespace Motokraft\BuilderSchemaOrg\Thing;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\PropertyValue;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use \Motokraft\BuilderSchemaOrg\Intangible\Rating\AggregateRating;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\GeoCoordinates;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Review;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification;

class Place extends Thing
{
    protected $additionalProperty;
    protected $address;
    protected $aggregateRating;
    protected $branchCode;
    protected $geo;
    protected $latitude = 0;
    protected $longitude = 0;
    protected $logo;
    protected $photo;
    protected $review;
    protected $slogan;
    protected $telephone;
    protected $openingHoursSpecification;

    function __construct()
    {
        $this->additionalProperty = new Collections;
        $this->photo = new Collections;
        $this->openingHoursSpecification = new Collections;
    }

    function addAdditionalProperty(PropertyValue $value)
    {
        $this->additionalProperty->push($value);
        return $value;
    }

    function setAddress(PostalAddress $value)
    {
        $this->set('address', $value);
        return $value;
    }

    function setAggregateRating(AggregateRating $value)
    {
        $this->set('aggregateRating', $value);
        return $value;
    }

    function setBranchCode(string $value)
    {
        $this->set('branchCode', $value);
        return $this;
    }

    function setGeo(GeoCoordinates $value)
    {
        $this->set('geo', $value);
        return $value;
    }

    function setLatitude(float $value)
    {
        $this->set('latitude', (double) $value);
        return $this;
    }

    function setLongitude(float $value)
    {
        $this->set('longitude', (double) $value);
        return $this;
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

    function addPhoto(ImageObject $value)
    {
        $this->photo->push($value);
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

    function setTelephone(string $value)
    {
        $this->set('telephone', $value);
        return $this;
    }

    function addOpeningHoursSpecification(OpeningHoursSpecification $value)
    {
        $this->openingHoursSpecification->push($value);
        return $value;
    }
}