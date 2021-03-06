<?php namespace Acme\Users;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    public function gravatar($size = 30)
    {
        $email = md5($this->email);
        return "//www.gravatar.com/avatar/{$email}?s={$size}";
    }

}
