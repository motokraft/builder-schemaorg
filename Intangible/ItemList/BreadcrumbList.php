<?php namespace Motokraft\BuilderSchemaOrg\Intangible\ItemList;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\BuilderSchemaOrg\Intangible\ListItem;
use \Motokraft\Object\Collections;
use \Motokraft\Object\BaseObject;

class BreadcrumbList extends Thing
{
    protected $itemListElement;

    function __construct()
    {
        $this->itemListElement = new Collections;
    }

    function addItemListElement(array $data)
    {
        $item = new ListItem;

        if(isset($data['position']))
        {
            $item->setPosition($data['position']);
        }

        if(isset($data['name']))
        {
            $item->setName($data['name']);
        }

        if(isset($data['item']))
        {
            $item->setItem($data['item']);
        }

        $this->itemListElement->push($item);
        return $item;
    }

    function getItemListElements($default = null)
    {
        return $this->get('itemListElement', $default);
    }
}