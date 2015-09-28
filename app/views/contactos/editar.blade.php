@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <hgroup class="wrap">
        <h1>Editar {{ $contacto->nombre }}</h1>
        <nav>
            {{ HTML::link('admin', 'Volver', array('class' => 'btn back-btn')) }}
        </nav>
    </hgroup>
    <section class="wrap">
        {{ Form::model($contacto, array('route' =>
            array('contacts.update', $contacto->id))) }}
            <fieldset class="half split">
                <p>
                    <strong>Nombre: </strong>
                    {{ Form::text('nombre') }}
                </p>
            </fieldset>
            <fieldset class="half split">
                <p>
                    <strong>Apellido: </strong>
                    {{ Form::text('apellido') }}
                </p>
            </fieldset>

        <aside class="buttons">
            {{ Form::button('Editar', array('class' => 'btn', 'type' => 'submit')) }}
            <a href="{{ URL::route('contact.delete', $contacto->id) }}" class="btn delete red">Eliminar</a>
        </aside>

        {{ Form::close() }}

        @if ($errors->any())
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        @endif

    </section>
@stop
