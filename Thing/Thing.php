<?php namespace Motokraft\BuilderSchemaOrg\Thing;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\HtmlElement\HtmlElement;
use \Motokraft\Object\BaseObject;
use \Motokraft\Object\Collections;

class Thing extends BaseObject
{
    function getReflectionClass()
    {
        return new \ReflectionClass($this);
    }

    function getShortName()
    {
        $class = $this->getReflectionClass();
        return $class->getShortName();
    }

    function getArray(BaseObject $result = null)
    {
        if(!$result instanceof BaseObject)
        {
            $result = new BaseObject;
        }

        if(!$data = get_object_vars($this))
        {
            return $result->getArray();
        }

        $result->set('@type', $this->getShortName());

        foreach($data as $name => $value)
        {
            if(!empty($value) && is_array($value))
            {
                $result->set($name, $value);
            }
            else if ($value instanceof Collections)
            {
                $map_item = function ($item)
                {
                    return $item->getArray();
                };

                if($items = $value->map($map_item))
                {
                    $result->set($name, $items);
                }
            }
            else if(is_object($value))
            {
                $result->set($name, $value->getArray());
            }
            else if(!empty($value))
            {
                $result->set($name, $value);
            }
        }

        return $result->getArray();
    }

    function render(HtmlElement $element)
    {
        $script = $this->getHtmlElement();
        return $element->appendHtml($script);
    }

    function getHtmlElement()
    {
        $script = new HtmlElement('script', [
            'type' => 'application/ld+json'
        ]);

        if($data = (array) $this->getArray())
        {
            $script->html(json_encode($data));
        }

        return $script;
    }

    function __toString()
    {
        return (string) $this->getHtmlElement();
    }

    function offsetSet($offset, $value)
    {
        $method = 'set' . ucfirst($offset);

        if(method_exists($this, $method))
        {
            $this->{$method}($value);
        }
        else
        {
            parent::offsetSet($offset, $value);
        }
    }
}