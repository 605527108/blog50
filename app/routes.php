<?php
/*
Event::listen('Acme.Registration.Events.UserRegistered',function($event)
{
    dd('send something');
});
*/

Route::get('statuses',['as'=>'statuses_path','uses'=>'StatusController@index']);
Route::post('statuses',['as'=>'statuses_path','uses'=>'StatusController@store']);


Route::get('/',['as' => 'home','uses' => 'PageController@index']);

Route::get('/register', 'RegistrationController@create');
Route::post('/register',['as' => 'registration.store','uses' => 'RegistrationController@store']);

Route::get('/logout',['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::get('/login',['as' => 'login', 'uses' =>'SessionsController@create']);
Route::resource('sessions', 'SessionsController', ['only' => ['create','store','destroy']]);

//Route::get('/remind',['as'=>'password.remind','uses'=>'RemindersController@getRemind']);
/*
Route::post('/remind',['as'=>'password.remind','uses'=>'RemindersController@postRemind']);
Route::get('/reset',['as'=>'password.reset','uses'=>'RemindersController@getReset']);
Route::post('/reset',['as'=>'password.reset','uses'=>'RemindersController@postReset']);
*/

Route::controller('password','RemindersController');

Route::get('/blog', 'BlogController@index');
Route::get('/post/new', ['as' => 'newPost','uses' => 'BlogController@newPost']);
Route::post('/post/new', ['as' => 'createPost','uses' => 'BlogController@createPost']);
Route::get('/post/{id}', ['as' => 'viewPost','uses' => 'BlogController@viewPost']);
Route::post('/post/{id}/comment', ['as' => 'createComment', 'uses' => 'BlogController@createComment']);
