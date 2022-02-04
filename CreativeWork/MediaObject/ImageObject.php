<?php namespace Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\Intangible\StructuredValue\PropertyValue;

class ImageObject extends MediaObject
{
    protected $caption;
    protected $exifData;
    protected $url;
    protected $thumbnail;
    protected $width = 0;
    protected $height = 0;

    function __construct(array $data = [])
    {
        if(isset($data['caption']))
        {
            $this->setCaption($data['caption']);
        }

        if(isset($data['url']))
        {
            $this->setUrl($data['url']);
        }

        if(isset($data['width']))
        {
            $this->setWidth($data['width']);
        }

        if(isset($data['height']))
        {
            $this->setHeight($data['height']);
        }

        $this->exifData = new Collections;
    }

    function setCaption(string $value)
    {
        $this->set('caption', $value);
        return $this;
    }

    function addExifData(PropertyValue $value)
    {
        $this->exifData->push($value);
        return $value;
    }

    function setUrl(string $value)
    {
        $this->set('url', $value);
        return $this;
    }

    function setThumbnail(ImageObject $value)
    {
        $this->set('thumbnail', $value);
        return $value;
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
}