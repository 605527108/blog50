<?php namespace Acme\Statuses;
use Acme\Users\User;
class StatusRepository{
    public function getAllForUser(User $user)
    {
        return $user->statuses;
    }
    public function save(Status $status,$userId)
    {
        return User::findOrFail($userId)->statuses()->save($status);    
    }
}
