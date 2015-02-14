<?php namespace Acme\Registration;

class RegisterUserCommand{
    public $username;
    public $email;
    public $password;
    function __construct($username,$email,$password)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
}
