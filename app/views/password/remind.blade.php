@extends('layouts/layout')
@section('meta-title', 'Forgot Password')
@section('content')
    <h1>Forgot Password</h1>
    {{ Form::open() }}
        <div class="form-group">
            {{ Form::label('email','Email:') }}
            {{ Form::email('email', null, ['class'=> 'form-control']) }}
        </div>       
        <div class="form-group">
            {{ Form::submit('Send Reminder', ['class'=> 'btn btn-primary'] )}}
        </div>
        @if(Session::has('error'))
            <div class="form-group">
                <p>{{ Session::get('error') }}</p>
            </div>
        @endif
        
        @if(Session::has('status'))
            <div class="form-group">
                <p>{{ Session::get('status') }}</p>
            </div>
        @endif
    {{ Form::close() }}
</div>
@stop

