<?php namespace Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class ImageObject extends Thing
{
    protected $url;
    protected $width = 0;
    protected $height = 0;

    function setUrl(string $value)
    {
        $this->set('url', $value);
        return $this;
    }

    function setWidth(int $value)
    {
        $this->set('width', $value);
        return $this;
    }

    function setHeight(int $value)
    {
        $this->set('height', $value);
        return $this;
    }

    function getUrl($default = null)
    {
        return $this->get('url', $default);
    }

    function getWidth($default = null)
    {
        return $this->get('width', $default);
    }

    function getHeight($default = null)
    {
        return $this->get('height', $default);
    }
}