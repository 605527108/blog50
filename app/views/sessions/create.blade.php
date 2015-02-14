@extends('layouts/layout')
@section('meta-title', 'Login')
@section('content')
    <h1>Log In</h1>
    {{ Form::open(['route' => 'sessions.store']) }}
        <div class="form-group">
            {{ Form::label('email','Email:') }}
            {{ Form::text('email', null, ['class'=> 'form-control']) }}
            {{ errors_for('email',$errors) }}
        </div>       
        
        <div class="form-group">
            {{ Form::label('password','Password:') }}
            {{ Form::password('password', ['class'=> 'form-control']) }}
            {{ errors_for('password',$errors) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Sign In', ['class'=> 'btn btn-primary'] )}}
            {{link_to('password/remind', 'Forget You Password?')}}
        </div>
        @if(Session::has('flash_message'))
            <div class="form-group">
                <p>{{ Session::get('flash_message') }}</p>
            </div>
        @endif
    {{ Form::close() }}
</div>
@stop

