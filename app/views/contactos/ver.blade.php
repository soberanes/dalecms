@extends('layouts.master')

@section('sidebar')
    @parent
    Información del contacto
@stop

@section('content')
    {{ HTML::link('contactos', 'Volver') }}
    <h1>Contacto {{ $contacto->id }}</h1>
    {{ $contacto->nombre . ' ' . $contacto->apellido }}
    <br />
    {{ $contacto->created_at }}
@stop
