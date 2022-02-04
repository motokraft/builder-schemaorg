<?php namespace Motokraft\BuilderSchemaOrg\Traits;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject\ImageObject;

trait ImageObjectTrait
{
    function setImage(array $data)
    {
        $image = new ImageObject($data);
        return $this->setImageObject($image);
    }

    function setImageObject(ImageObject $value)
    {
        $collestion = $this->getImages();
        $collestion->push($value);

        return $value;
    }

    function getImages($default = null)
    {
        return $this->get('image', $default);
    }

    function offsetSet($offset, $value)
    {
        if(strtolower($offset) !== 'image')
        {
            parent::offsetSet($offset, $value);
        }

        if(is_array($value) && !empty($value))
        {
            $this->setImage($value);
        }
        else if($value instanceof ImageObject)
        {
            $this->setImageObject($value);
        }
    }
}