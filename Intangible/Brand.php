<?php namespace Motokraft\BuilderSchemaOrg\Intangible;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class Brand extends Thing
{
    protected $name;

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function getName($default = null)
    {
        return $this->get('name', $default);
    }
}