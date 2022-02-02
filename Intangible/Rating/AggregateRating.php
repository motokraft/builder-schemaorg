<?php namespace Motokraft\BuilderSchemaOrg\Intangible\Rating;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class AggregateRating extends Thing
{
    protected $ratingValue = 0;
    protected $reviewCount = 0;

    function setRatingValue(float $value)
    {
        $this->set('ratingValue', $value);
        return $this;
    }

    function setReviewCount(int $value)
    {
        $this->set('reviewCount', $value);
        return $this;
    }

    function getRatingValue($default = null)
    {
        return $this->get('ratingValue', $default);
    }

    function getReviewCount($default = null)
    {
        return $this->get('reviewCount', $default);
    }
}