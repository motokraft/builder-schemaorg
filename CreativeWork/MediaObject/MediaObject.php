<?php namespace Motokraft\BuilderSchemaOrg\CreativeWork\MediaObject;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\Object\Collections;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Article\NewsArticle;

class MediaObject extends Thing
{
    protected $name;
    protected $associatedArticle;
    protected $bitrate;
    protected $contentSize;
    protected $contentUrl;
    protected $duration;
    protected $encodingFormat;
    protected $embedUrl;
    protected $startTime;
    protected $endTime;
    protected $uploadDate;

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function setAssociatedArticle(NewsArticle $value)
    {
        $this->set('associatedArticle', $value);
        return $value;
    }

    function setBitrate(string $value)
    {
        $this->set('bitrate', $value);
        return $this;
    }

    function setContentSize(string $value)
    {
        $this->set('contentSize', $value);
        return $this;
    }

    function setContentUrl(string $value)
    {
        $this->set('contentUrl', $value);
        return $this;
    }

    function setDuration(string $value)
    {
        $this->set('duration', $value);
        return $this;
    }

    function setEncodingFormat(string $value)
    {
        $this->set('encodingFormat', $value);
        return $this;
    }

    function setEmbedUrl(string $value)
    {
        $this->set('embedUrl', $value);
        return $this;
    }

    function setStartTime(string $value)
    {
        $this->set('startTime', $value);
        return $this;
    }

    function setEndTime(string $value)
    {
        $this->set('endTime', $value);
        return $this;
    }

    function setUploadDate(string $value)
    {
        $this->set('uploadDate', $value);
        return $this;
    }
}