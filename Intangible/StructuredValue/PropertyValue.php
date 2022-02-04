<?php namespace Motokraft\BuilderSchemaOrg\Intangible\StructuredValue;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class PropertyValue extends Thing
{
    protected $maxValue;
    protected $minValue;
    protected $propertyID;
    protected $unitCode;
    protected $unitText;
    protected $name;
    protected $value;

    function setMaxValue(float $value)
    {
        $this->set('maxValue', $value);
        return $this;
    }

    function setMinValue(float $value)
    {
        $this->set('minValue', $value);
        return $this;
    }

    function setPropertyID(string $value)
    {
        $this->set('propertyID', $value);
        return $this;
    }

    function setUnitCode(string $value)
    {
        $this->set('unitCode', $value);
        return $this;
    }

    function setUnitText(string $value)
    {
        $this->set('unitText', $value);
        return $this;
    }

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function setValue($value)
    {
        $this->set('value', $value);
        return $this;
    }

    function getMaxValue($default = null)
    {
        return $this->get('maxValue', $default);
    }

    function getMinValue($default = null)
    {
        return $this->get('minValue', $default);
    }

    function getPropertyID($default = null)
    {
        return $this->get('propertyID', $default);
    }

    function getUnitCode($default = null)
    {
        return $this->get('unitCode', $default);
    }

    function getUnitText($default = null)
    {
        return $this->get('unitText', $default);
    }

    function getName($default = null)
    {
        return $this->get('name', $default);
    }

    function getValue($default = null)
    {
        return $this->get('value', $default);
    }
}