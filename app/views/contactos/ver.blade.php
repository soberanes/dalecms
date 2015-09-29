@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <hgroup class="wrap">
        <h1>Detalle de {{ $contacto->nombre }}</h1>
        <nav>
            {{ HTML::link('admin/contacts', 'Volver', array('class' => 'btn back-btn')) }}
        </nav>
    </hgroup>
    <section class="wrap">
        <fieldset class="half split">
            <p><strong>Nombre: </strong> {{ $contacto->nombre }}</p>
            <p><strong>Detalles de cuenta: </strong></p>
        </fieldset>

        <fieldset class="half split">
            <p><strong>Apellido: </strong> {{ $contacto->apellido }}</p>
        </fieldset>

        <br />

        <p><span>Fecha de creación: <em>{{ $contacto->created_at }}</em></span></p>
        <aside class="buttons">
            <a href="{{ URL::route('contacts.edit', $contacto->id) }}" class="btn">Editar</a>
            <a href="{{ URL::route('contacts.delete', $contacto->id) }}" class="btn delete red">Eliminar</a>
        </aside>
    </section>
@stop
