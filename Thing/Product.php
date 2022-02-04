<?php namespace Motokraft\BuilderSchemaOrg\Thing;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\BuilderSchemaOrg\Intangible\Brand;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Review;
use \Motokraft\BuilderSchemaOrg\Intangible\Rating\AggregateRating;
use \Motokraft\BuilderSchemaOrg\Intangible\Offer;
use \Motokraft\BuilderSchemaOrg\Traits\ImageObjectTrait;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\PropertyValue;
use \Motokraft\BuilderSchemaOrg\Intangible\Service;

class Product extends Thing
{
    use ImageObjectTrait;

    protected $name;
    protected $image;
    protected $description;
    protected $sku;
    protected $mpn;
    protected $brand;
    protected $review;
    protected $additionalProperty;
    protected $aggregateRating;
    protected $offers;
    protected $productID;
    protected $productionDate;
    protected $purchaseDate;
    protected $releaseDate;
    protected $width;
    protected $height;
    protected $weight;
    protected $isAccessoryOrSparePartFor;
    protected $isConsumableFor;
    protected $isRelatedTo;
    protected $isSimilarTo;
    protected $manufacturer;
    protected $itemCondition;
    protected $size;
    protected $logo;

    function __construct()
    {
        $this->image = new Collections;
        $this->additionalProperty = new Collections;
        $this->isAccessoryOrSparePartFor = new Collections;
        $this->isConsumableFor = new Collections;
        $this->isRelatedTo = new Collections;
        $this->isSimilarTo = new Collections;
    }

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

    function addAdditionalProperty(PropertyValue $value)
    {
        $this->additionalProperty->push($value);
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

    function setProductID(string $value)
    {
        $this->set('productID', $value);
        return $value;
    }

    function setProductionDate(string $value)
    {
        $this->set('productionDate', $value);
        return $value;
    }

    function setPurchaseDate(string $value)
    {
        $this->set('purchaseDate', $value);
        return $value;
    }

    function setReleaseDate(string $value)
    {
        $this->set('releaseDate', $value);
        return $value;
    }

    function setHeight(float $value)
    {
        $this->set('height', $value);
        return $this;
    }

    function setWeight(float $value)
    {
        $this->set('weight', $value);
        return $this;
    }

    function addAccessoryOrSparePartFor(Product $value)
    {
        $this->isAccessoryOrSparePartFor->push($value);
        return $value;
    }

    function addConsumableFor(Product $value)
    {
        $this->isConsumableFor->push($value);
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

    function setManufacturer(Organization $value)
    {
        $this->set('manufacturer', $value);
        return $value;
    }

    function setItemCondition(string $value)
    {
        $this->set('itemCondition', $value);
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

    function setSize(string $value)
    {
        $this->set('size', $value);
        return $this;
    }
}