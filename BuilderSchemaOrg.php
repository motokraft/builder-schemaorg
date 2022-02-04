<?php namespace Motokraft\BuilderSchemaOrg;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\HtmlElement\HtmlElement;
use \Motokraft\Object\BaseObject;
use \Motokraft\Object\Traits\CollectionsTrait;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\ContactPoint;
use \Motokraft\BuilderSchemaOrg\Thing\Organization;
use \Motokraft\BuilderSchemaOrg\Organization\LocalBusiness\FoodEstablishment\Restaurant;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Review;
use \Motokraft\BuilderSchemaOrg\Intangible\Rating;
use \Motokraft\BuilderSchemaOrg\Intangible\ItemList\BreadcrumbList;
use \Motokraft\BuilderSchemaOrg\Thing\Person;
use \Motokraft\BuilderSchemaOrg\Thing\Product;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Article\NewsArticle;
use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;
use \Motokraft\BuilderSchemaOrg\CreativeWork\WebPage\FAQPage;
use \Motokraft\BuilderSchemaOrg\CreativeWork\WebPage\QAPage;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Comment\Question;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Comment\Answer;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Article\SocialMediaPosting\BlogPosting;
use \Motokraft\BuilderSchemaOrg\Intangible\Brand;
use \Motokraft\BuilderSchemaOrg\Intangible\Rating\AggregateRating;
use \Motokraft\BuilderSchemaOrg\Intangible\Offer;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\PropertyValue;
use \Motokraft\BuilderSchemaOrg\Intangible\Service;

class BuilderSchemaOrg
{
    const CONTEXT = 'https://schema.org';

    use CollectionsTrait,
        Traits\SchemaTrait,
        Traits\ClassTrait;

    private static $instance;

    private static $classes = [
        'organization' => Organization::class,
        'postaladdress' => PostalAddress::class,
        'restaurant' => Restaurant::class,
        'review' => Review::class,
        'rating' => Rating::class,
        'breadcrumblist' => BreadcrumbList::class,
        'contactpoint' => ContactPoint::class,
        'person' => Person::class,
        'newsarticle' => NewsArticle::class,
        'imageobject' => ImageObject::class,
        'faqpage' => FAQPage::class,
        'question' => Question::class,
        'qapage' => QAPage::class,
        'answer' => Answer::class,
        'blogposting' => BlogPosting::class,
        'product' => Product::class,
        'brand' => Brand::class,
        'aggregaterating' => AggregateRating::class,
        'offer' => Offer::class,
        'propertyvalue' => PropertyValue::class,
        'service' => Service::class
    ];

    static function getInstance()
    {
        if(!self::$instance instanceof static)
        {
            self::$instance = new static;
        }

        return self::$instance;
    }

    /*
    function getPostalAddress()
    {
        return $this->getClass('postaladdress');
    }

    function getOrganization()
    {
        return $this->getClass('organization');
    }

    function getRestaurant()
    {
        return $this->getClass('restaurant');
    }

    function getReview()
    {
        return $this->getClass('review');
    }

    function getRating()
    {
        return $this->getClass('rating');
    }

    function getBreadcrumbList()
    {
        return $this->getClass('breadcrumblist');
    }

    function getContactPoint()
    {
        return $this->getClass('contactpoint');
    }

    function getPerson()
    {
        return $this->getClass('person');
    }

    function getNewsArticle()
    {
        return $this->getClass('newsarticle');
    }

    function getImageObject()
    {
        return $this->getClass('imageobject');
    }

    function getFAQPage()
    {
        return $this->getClass('faqpage');
    }

    function getQuestion()
    {
        return $this->getClass('question');
    }

    function getQAPage()
    {
        return $this->getClass('qapage');
    }

    function getAnswer()
    {
        return $this->getClass('answer');
    }

    function getBlogPosting()
    {
        return $this->getClass('blogposting');
    }

    function getProduct_()
    {
        return $this->getClass('product');
    }

    function getBrand()
    {
        return $this->getClass('brand');
    }

    function getAggregateRating()
    {
        return $this->getClass('aggregaterating');
    }

    function getOffer()
    {
        return $this->getClass('offer');
    }

    function getPropertyValue()
    {
        return $this->getClass('propertyvalue');
    }
    */

    function __call($name, $arguments)
    {
        if(strpos($name, 'get') === 0)
        {
            $class = strtolower(substr($name, 3));
            return $this->getClass($class, $arguments);
        }

        throw new \Exception('Method not found!');
    }
}