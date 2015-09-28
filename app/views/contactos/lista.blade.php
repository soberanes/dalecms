@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <hgroup class="wrap">
        <h1>Contactos</h1>
		<nav>
            {{ HTML::link('admin/nuevo', 'Agregar nuevo contacto', array('class' => 'btn')) }}
        </nav>
    </hgroup>
    <section class="wrap">

        <ul class="list">
            @if (count($contactos) == 0)
                <li>
                    <h2>No hay contactos.</h2>
                    <p class="lead">
                        Agrega un nuevo contacto en el botón <span>Agregar nuevo contacto</span>.
                    </p>
                </li>
            @else
                @foreach($contactos as $contacto)
                <li>
                    <a href="{{ URL::route('admin/edit', $contacto->id) }}">
                        <strong>{{ $contacto->nombre . ' ' . $contacto->apellido }}</strong>
                        <span>Username: {{ $contacto->nombre }}</span>
                        <em class="highlight">{{ $contacto->created_at }}</em>
                    </a>
                </li>
                @endforeach
            @endif
        </ul>
    </section>
@stop
