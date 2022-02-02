<?php namespace Motokraft\BuilderSchemaOrg\Intangible;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class ListItem extends Thing
{
    protected $position;
    protected $name;
    protected $item;

    function setPosition(int $value)
    {
        $this->set('position', $value);
        return $this;
    }

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function setItem(string $value)
    {
        $this->set('item', $value);
        return $this;
    }

    function getPosition($default = null)
    {
        return $this->get('position', $default);
    }

    function getName($default = null)
    {
        return $this->get('name', $default);
    }

    function getItem($default = null)
    {
        return $this->get('item', $default);
    }
}