<?php namespace Motokraft\BuilderSchemaOrg\CreativeWork;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\BuilderSchemaOrg\Intangible\Rating;
use \Motokraft\BuilderSchemaOrg\Thing\Person;

class Review extends Thing
{
    protected $reviewRating;
    protected $author;

    function setReviewRating(Rating $value)
    {
        $this->set('reviewRating', $value);
        return $value;
    }

    function setAuthor(Person $value)
    {
        $this->set('author', $value);
        return $value;
    }

    function getReviewRating($default = null)
    {
        return $this->get('reviewRating', $default);
    }

    function getAuthor($default = null)
    {
        return $this->get('author', $default);
    }
}