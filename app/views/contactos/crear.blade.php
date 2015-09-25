@extends('layouts.master')

@section('sidebar')
    @parent
    Formulario de contacto
@stop

@section('content')
    {{ HTML::link('contactos', 'volver') }}
    <h1>Crear contacto</h1>
    {{ Form::open(array('url' => 'contactos/crear')) }}
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', '') }}
        {{ Form::label('apellido', 'Apellido') }}
        {{ Form::text('apellido', '') }}
        {{ Form::submit('Guardar') }}
    {{ Form::close() }}
@stop
