@extends('layouts.login')

@section('sidebar-title')
    <h2>Reset Password</h2>
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
    {{ Form::open(array('url' => 'resetpwd/save', 'method' => 'post', 'class'=>'form-horizontal' )) }}
    <fieldset>
        <p>
            {{ Form::label('new_password', 'Nueva contraseña:') }}
            {{ Form::password('new_password', array('class' => 'form-control', 'placeholder' => 'New password')) }}
        </p>
        <p>
            {{ Form::label('re_new_password', 'Confirm password:') }}
            {{ Form::password('re_new_password', array('class' => 'form-control', 'placeholder' => 'Confirm password')) }}
        </p>
        <p class="buttons">
            {{ HTML::link('login', 'Back to login') }}
            {{ Form::button('Change password', array('type' => 'submit')) }}
        </p>
    </fieldset>
    {{ Form::close() }}
</section>
@stop
