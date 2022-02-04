<?php namespace Motokraft\BuilderSchemaOrg\CreativeWork\WebPage;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Comment\Question;
use \Motokraft\BuilderSchemaOrg\Intangible\ItemList\BreadcrumbList;

class FAQPage extends Thing
{
    protected $breadcrumb;
    protected $mainEntity;

    function __construct()
    {
        $this->mainEntity = new Collections;
    }

    function setBreadcrumb(BreadcrumbList $value)
    {
        $this->set('breadcrumb', $value);
        return $value;
    }

    function addMainEntity(Question $value)
    {
        $this->mainEntity->push($value);
        return $value;
    }

    function getBreadcrumb($default = null)
    {
        return $this->get('breadcrumb', $default);
    }

    function getMainEntity($default = null)
    {
        return $this->get('mainEntity', $default);
    }
}