<?php

namespace Acme\Statuses;
use Acme\Statuses\Events\StatusWasPublished;
use Laracasts\Commander\Events\EventGenerator;
class Status extends \Eloquent{

    use EventGenerator;
    protected $fillable = ['body'];
    public function user()
    {
        return $this->belongsto('Acme\Users\User');
    }
    public static function publish($body)
    {
        $status = new static(compact('body'));
        $status->raise(new StatusWasPublished($body));
        return $status;
    }

}
