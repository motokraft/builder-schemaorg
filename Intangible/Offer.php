<?php namespace Motokraft\BuilderSchemaOrg\Intangible;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class Offer extends Thing
{
    protected $url;
    protected $priceCurrency;
    protected $price;
    protected $priceValidUntil;
    protected $itemCondition;
    protected $availability;

    function setUrl(string $value)
    {
        $this->set('url', $value);
        return $this;
    }

    function setPriceCurrency(string $value)
    {
        $this->set('priceCurrency', $value);
        return $this;
    }

    function setPrice(float $value)
    {
        $this->set('price', $value);
        return $this;
    }

    function setPriceValidUntil(string $value)
    {
        $this->set('priceValidUntil', $value);
        return $this;
    }

    function setItemCondition(string $value)
    {
        $this->set('itemCondition', $value);
        return $this;
    }

    function setAvailability(string $value)
    {
        $this->set('availability', $value);
        return $this;
    }
}