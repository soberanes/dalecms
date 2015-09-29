@extends('layouts.login')

@section('content')
<section class="login content">
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
            <a href="/blog/admin/amnesia">Forgotten your password?</a>
            {{ Form::button('Login', array('type' => 'submit')) }}
        </p>
        <p class="login-link">
            {{ HTML::link('register', 'Register', array('class' => 'reg-link')) }}
        </p>
    </fieldset>
    {{ Form::close() }}
</section>
@stop
