<?php namespace Motokraft\BuilderSchemaOrg\Traits;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

trait SchemaTrait
{
    function addSchema($schema)
    {
        $name = $schema->getShortName();
        $this->_items[$name] = $schema;

        return true;
    }

    function getSchema(string $name)
    {
        if(!$this->hasSchema($name))
        {
            return false;
        }

        return $this->_items[$name];
    }

    function hasSchema(string $name)
    {
        return isset($this->_items[$name]);
    }
}