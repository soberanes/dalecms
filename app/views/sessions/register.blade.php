@extends('layouts.login')

@section('content')
    <hgroup class="wrap">
        <h1>Create an account</h1>
    </hgroup>
    <section class="wrap">
    {{ Form::open(array('url' => 'register/save', 'method' => 'post', 'class'=>'form-horizontal' )) }}
        <fieldset class="half split">
            {{ Form::text('real_name', '', array('placeholder' => 'Full Name')) }}
        </fieldset>
        <fieldset class="half split">
            {{ Form::text('username', '', array('placeholder' => 'Username')) }}
        </fieldset>
        <fieldset class="half split">
            {{ Form::text('password', '', array('placeholder' => 'Password')) }}
        </fieldset>
        <fieldset class="half split">
            {{ Form::text('email', '', array('placeholder' => 'Email')) }}
        </fieldset>
        <p class="buttons">
            {{ HTML::link('admin/contacts', 'Back to login') }}
            {{ Form::button('Register', array('type' => 'submit')) }}
        </p>
    {{ Form::close() }}
    </section>
@stop
