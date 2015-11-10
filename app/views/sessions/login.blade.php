@extends('layouts.login')

@section('sidebar-title')
    <h2>Login</h2>
@stop

@section('content')
<section class="login content">
    <div class="notifications">
        @if ($errors->any())
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        @endif
    </div>
    {{ Form::open(array('route' => 'sessions.store', 'class'=>'form-horizontal' )) }}
    <fieldset>
        <p>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'username')) }}
        </p>
        <p>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password')) }}
        </p>
        <p class="buttons">
            {{ HTML::link('resetpwd', 'Forgotten your password?') }}
            {{ Form::button('Login', array('type' => 'submit')) }}
        </p>
        <p class="login-link">
            {{ HTML::link('register', 'Register', array('class' => 'reg-link')) }}
        </p>
    </fieldset>
    {{ Form::close() }}
</section>
@stop
