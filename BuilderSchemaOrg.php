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
        'offer' => Offer::class
    ];

    static function getInstance()
    {
        if(!self::$instance instanceof static)
        {
            self::$instance = new static;
        }

        return self::$instance;
    }

    function getPostalAddress(bool $add = true)
    {
        $class = $this->getClass('postaladdress');
        return $this->loadClass($class, $add);
    }

    function getOrganization(bool $add = true)
    {
        $class = $this->getClass('organization');
        return $this->loadClass($class, $add);
    }

    function getRestaurant(bool $add = true)
    {
        $class = $this->getClass('restaurant');
        return $this->loadClass($class, $add);
    }

    function getReview(bool $add = true)
    {
        $class = $this->getClass('review');
        return $this->loadClass($class, $add);
    }

    function getRating(bool $add = true)
    {
        $class = $this->getClass('rating');
        return $this->loadClass($class, $add);
    }

    function getBreadcrumbList(bool $add = true)
    {
        $class = $this->getClass('breadcrumblist');
        return $this->loadClass($class, $add);
    }

    function getContactPoint(bool $add = true)
    {
        $class = $this->getClass('contactpoint');
        return $this->loadClass($class, $add);
    }

    function getPerson(bool $add = true)
    {
        $class = $this->getClass('person');
        return $this->loadClass($class, $add);
    }

    function getNewsArticle(bool $add = true)
    {
        $class = $this->getClass('newsarticle');
        return $this->loadClass($class, $add);
    }

    function getImageObject(bool $add = false)
    {
        $class = $this->getClass('imageobject');
        return $this->loadClass($class, $add);
    }

    function getFAQPage(bool $add = true)
    {
        $class = $this->getClass('faqpage');
        return $this->loadClass($class, $add);
    }

    function getQuestion(bool $add = false)
    {
        $class = $this->getClass('question');
        return $this->loadClass($class, $add);
    }

    function getQAPage(bool $add = true)
    {
        $class = $this->getClass('qapage');
        return $this->loadClass($class, $add);
    }

    function getAnswer(bool $add = false)
    {
        $class = $this->getClass('answer');
        return $this->loadClass($class, $add);
    }

    function getBlogPosting(bool $add = true)
    {
        $class = $this->getClass('blogposting');
        return $this->loadClass($class, $add);
    }

    function getProduct(bool $add = true)
    {
        $class = $this->getClass('product');
        return $this->loadClass($class, $add);
    }

    function getBrand(bool $add = false)
    {
        $class = $this->getClass('brand');
        return $this->loadClass($class, $add);
    }

    function getAggregateRating(bool $add = false)
    {
        $class = $this->getClass('aggregaterating');
        return $this->loadClass($class, $add);
    }

    function getOffer(bool $add = false)
    {
        $class = $this->getClass('offer');
        return $this->loadClass($class, $add);
    }
}