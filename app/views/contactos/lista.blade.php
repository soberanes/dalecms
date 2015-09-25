@extends('layouts.master')

@section('sidebar')
    @parent
    Lista de contactos
@stop

@section('content')
    <h1>Contactos</h1>
    {{ HTML::link('contactos/nuevo', 'Crear contacto') }}

    <ul>
      @foreach($contactos as $contacto)
        <li>{{ HTML::link('contactos/'.$contacto->id, $contacto->nombre.' '.$contacto->apellido) }}</li>
      @endforeach
    </ul>
@stop
