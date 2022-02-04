<?php namespace Motokraft\BuilderSchemaOrg\Traits;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

trait ClassTrait
{
    function addClasses(array $items)
    {
        foreach($items as $name => $class)
        {
            $this->addClass($name, $class);
        }

        return $this;
    }

    function addClass(string $name, string $class)
    {
        self::$classes[$name] = $class;
        return $this;
    }

    function getClass(string $name, $arguments)
    {
        if(!$this->hasClass($name))
        {
            throw new \Exception('Class not found!');
        }

        return new self::$classes[$name]($arguments);
    }

    function hasClass(string $name)
    {
        return isset(self::$classes[$name]);
    }
}