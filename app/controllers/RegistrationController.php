<?php
use Acme\Registration\RegisterUserCommand;
use Acme\Core\CommandBus;
use Acme\Forms\RegistrationForm;

class RegistrationController extends \BaseController {
        use CommandBus;
        protected $registrationForm;
        
        
        function __construct(RegistrationForm $registrationForm)
        {
            $this->registrationForm = $registrationForm;
            $this->beforeFilter('guest');
        }
        
        public function create()
	{
	    return View::make('registration.create');
	}



        public function store()
	{ 
            
            $input = Input::only('username', 'email', 'password','password_confirmation'); 
            $this->registrationForm->validate($input);
            extract(Input::only('username', 'email', 'password'));
            $user = $this->execute(
                new RegisterUserCommand($username,$email,$password)
            );
            Auth::login($user);
            return Redirect::home();
        }
}
