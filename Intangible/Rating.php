<?php namespace Motokraft\BuilderSchemaOrg\Intangible;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class Rating extends Thing
{
    protected $ratingValue = 0;
    protected $bestRating = 0;

    function setRatingValue(int $value)
    {
        $this->set('ratingValue', $value);
        return $this;
    }

    function setBestRating(int $value)
    {
        $this->set('bestRating', $value);
        return $this;
    }

    function getRatingValue($default = null)
    {
        return $this->get('ratingValue', $default);
    }

    function getBestRating($default = null)
    {
        return $this->get('bestRating', $default);
    }
}