@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <hgroup class="wrap">
        <h1>Contactos</h1>
		<nav>
            {{ HTML::link('admin/nuevo', 'Crear contacto', array('class' => 'btn')) }}
        </nav>
    </hgroup>
    <section class="wrap">

        <ul class="list">
          @foreach($contactos as $contacto)
            <li>
                <a href="{{ URL::route('user', $contacto->id) }}">
                    <strong>{{ $contacto->nombre . ' ' . $contacto->apellido }}</strong>
                    <span>Username: {{ $contacto->nombre }}</span>
                    <em class="highlight">Admin</em>
                </a>
            </li>
          @endforeach
        </ul>
    </section>
@stop
