<?php namespace Motokraft\BuilderSchemaOrg\Intangible\StructuredValue;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class GeoCoordinates extends Thing
{
    protected $latitude = 0;
    protected $longitude = 0;

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

    function getLatitude($default = null)
    {
        return $this->get('latitude', $default);
    }

    function getLongitude($default = null)
    {
        return $this->get('longitude', $default);
    }
}