<?php namespace Acme\Users;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;
use Eloquent,Hash;
use Laracasts\Commander\Events\EventGenerator;
use Acme\Registration\Events\UserRegistered;
use Laracasts\Presenter\PresentableTrait;




    class User extends Eloquent implements UserInterface, RemindableInterface
    {
        use UserTrait,RemindableTrait,EventGenerator,PresentableTrait;

        protected $presenter = 'Acme\Users\UserPresenter';

        protected $table = 'users';
        
        protected $fillable = [
            'username', 'email', 'password'
        ];

        
        
        
        protected $hidden = array('password','remember_token');
        
        public function statuses()
        {
            return $this->hasMany('Acme\Statuses\Status');
        }
        
        public function getAuthIdentifier()
        {
            return $this->getKey();
        }
        
        
        public function getAuthPassword()
        {
            return $this->password;
        }
        
        
        public function getRememberToken()
        {
            return $this->remember_token;
        }
        
        
        public function setRememberToken($value)
        {
            $this->remember_token = $value;
        }
        
        
        public function getRememberTokenName()
        {
            return 'remember_token';
        }
        
        
        public function getReminderEmail()
        {
            return $this->email;
        }
        
        
        public function setPasswordAttribute($password)
        {
            $this->attributes['password'] = Hash::make($password);
        }
        
        
        public static function register($username,$email,$password)
        {
            $user = new static(compact('username','email','password'));
            $user->raise(new UserRegistered($user));
            return $user;
        }
    }
