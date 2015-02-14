<?php namespace Acme\Registration;


use Acme\Users\UserRepository;
use Laracasts\Commander\CommandHandler;
use Acme\Users\User;
use Laracasts\Commander\Events\DispatchableTrait;


class RegisterUserCommandHandler implements CommandHandler{
    protected $repository;
    use DispatchableTrait;


    function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    
    
    public function handle($command)
    {
        $user = User::register(
            $command->username,$command->email,$command->password
        );
        $this->repository->save($user);
        
        $this->dispatchEventsFor($user);
        
        return $user;
    }
}
