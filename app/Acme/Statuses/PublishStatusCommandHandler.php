<?php namespace Acme\Statuses;


use Acme\Statuses\StatusRepository;
use Laracasts\Commander\CommandHandler;
use Acme\Statuses\Status;
use Laracasts\Commander\Events\DispatchableTrait;


class PublishStatusCommandHandler implements CommandHandler{
    protected $statusRepository;
    use DispatchableTrait;


    function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    
    
    public function handle($command)
    {
        $status = Status::publish($command->body);
        $status = $this->statusRepository->save($status,$command->userId);
        
        $this->dispatchEventsFor($status);
        
        return $status;
    }
}
