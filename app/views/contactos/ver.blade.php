@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <hgroup class="wrap">
        <h1>Detalle de {{ $contacto->nombre }}</h1>
        <nav>
            {{ HTML::link('admin', 'Volver', array('class' => 'btn back-btn')) }}
        </nav>
    </hgroup>
    <section class="wrap">

        <p><strong>Nombre: </strong> {{ $contacto->nombre }}</p>
        <p><strong>Apellido: </strong> {{ $contacto->apellido }}</p>
        <br />
        <p><strong>Detalles de cuenta: </strong></p>
        <p><span>Fecha de creación: <em>{{ $contacto->created_at }}</em></span></p>

    </section>
@stop
