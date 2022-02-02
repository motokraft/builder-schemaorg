<?php namespace Motokraft\BuilderSchemaOrg\Intangible\StructuredValue;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class OpeningHoursSpecification extends Thing
{
    protected $dayOfWeek = [];
    protected $opens;
    protected $closes;

    function setDayOfWeek(string $value)
    {
        array_push($this->dayOfWeek, $value);
        return $this;
    }

    function setOpens(string $value)
    {
        $this->set('opens', $value);
        return $this;
    }

    function setCloses(string $value)
    {
        $this->set('closes', $value);
        return $this;
    }

    function getDayOfWeek($default = null)
    {
        return $this->get('dayOfWeek', $default);
    }

    function getOpens($default = null)
    {
        return $this->get('opens', $default);
    }

    function getCloses($default = null)
    {
        return $this->get('closes', $default);
    }
}