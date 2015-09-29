@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <hgroup class="wrap">
        <h1>Agregar nuevo contacto</h1>
        <nav>
            {{ HTML::link('admin/contacts', 'Volver', array('class' => 'btn back-btn')) }}
        </nav>
    </hgroup>
    <section class="wrap">
        {{ Form::open(array('url' => 'admin/contacts/store')) }}
            <fieldset class="half split">
                {{ Form::label('nombre', 'Nombre') }}
                {{ Form::text('nombre', '') }}
            </fieldset>
            <fieldset class="half split">
                {{ Form::label('apellido', 'Apellido') }}
                {{ Form::text('apellido', '') }}
            </fieldset>
            <aside class="buttons">
                {{ Form::button('Guardar', array('class' => 'btn', 'type' => 'submit')) }}
            </aside>
        {{ Form::close() }}
    </section>

@stop
