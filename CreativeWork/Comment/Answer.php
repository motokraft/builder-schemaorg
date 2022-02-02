<?php namespace Motokraft\BuilderSchemaOrg\CreativeWork\Comment;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;

class Answer extends Thing
{
    protected $text;
    protected $upvoteCount = 0;
    protected $url;

    function setText(string $value)
    {
        $this->set('text', $value);
        return $this;
    }

    function setUpvoteCount(int $value)
    {
        $this->set('upvoteCount', $value);
        return $this;
    }

    function setUrl(string $value)
    {
        $this->set('url', $value);
        return $this;
    }

    function getText($default = null)
    {
        return $this->get('text', $default);
    }

    function getUpvoteCount($default = null)
    {
        return $this->get('upvoteCount', $default);
    }

    function getUrl($default = null)
    {
        return $this->get('url', $default);
    }
}