@extends('layouts/layout')
@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Index</h1>
        <p class="lead">{{ Auth::check() ? "Welcome, " . $currentUser->username : "Why don't you sign up?" }}<p>
        <p>
          {{ Auth::check() ? link_to('/blog' , 'Blog' , ['class' => 'btn btn-lg btn-primary']) :link_to('/register' , 'Sign Up' , ['class' => 'btn btn-lg btn-primary']) }} 
        </p>
      </div>
</div>
@stop
