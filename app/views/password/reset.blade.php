@extends('layouts/layout')
@section('meta-title', 'Reset Password')
@section('content')
    <h1>Reset Password</h1>
    {{ Form::open() }}
        <div class="form-group">
            {{ Form::label('email','Email:') }}
            {{ Form::email('email', null, ['class'=> 'form-control','required' => 'required']) }}
        </div>       
        
        <div class="form-group">
            {{ Form::label('password','Password:') }}
            {{ Form::password('password', ['class'=> 'form-control','required' => 'required']) }}
        </div>   
        <div class="form-group">
            {{ Form::label('password_confirmation','Password Again:') }}
            {{ Form::password('password_confirmation', ['class'=> 'form-control','required' => 'required']) }}
        </div>
        <div class="form-group">
            {{ Form::hidden('token', $token) }}
        </div>
               
        <div class="form-group">
            {{ Form::submit('Reset Password', ['class'=> 'btn btn-primary'] )}}
        </div>
        
        @if(Session::has('error'))
            <div class="form-group">
                <p>{{ Session::get('error') }}</p>
            </div>
        @endif
    {{ Form::close() }}
</div>
@stop

