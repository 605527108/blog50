<?php namespace Acme\Statuses\Events;

class StatusWasPublished{
    public $body;
    function __construct($body)
    {
        $this->body = $body;
    }
}
