<?php namespace Motokraft\BuilderSchemaOrg\CreativeWork\Comment;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

use \Motokraft\BuilderSchemaOrg\Thing\Thing;
use \Motokraft\BuilderSchemaOrg\CreativeWork\Comment\Answer;
use \Motokraft\Object\Collections;

class Question extends Thing
{
    protected $name;
    protected $text;
    protected $answerCount = 0;
    protected $upvoteCount = 0;
    protected $acceptedAnswer;
    protected $suggestedAnswer;

    function __construct()
    {
        parent::__construct();
        $this->suggestedAnswer = new Collections;
    }

    function setName(string $value)
    {
        $this->set('name', $value);
        return $this;
    }

    function setText(string $value)
    {
        $this->set('text', $value);
        return $this;
    }

    function setAnswerCount(int $value)
    {
        $this->set('answerCount', $value);
        return $this;
    }

    function setUpvoteCount(int $value)
    {
        $this->set('upvoteCount', $value);
        return $this;
    }

    function setAcceptedAnswer(Answer $value)
    {
        $this->set('acceptedAnswer', $value);
        return $value;
    }

    function addSuggestedAnswer(Answer $value)
    {
        $this->suggestedAnswer->push($value);
        return $value;
    }

    function getName($default = null)
    {
        return $this->get('name', $default);
    }

    function getText($default = null)
    {
        return $this->get('text', $default);
    }

    function getAnswerCount($default = null)
    {
        return $this->get('answerCount', $default);
    }

    function getUpvoteCount($default = null)
    {
        return $this->get('upvoteCount', $default);
    }

    function getAcceptedAnswer($default = null)
    {
        return $this->get('acceptedAnswer', $default);
    }
}