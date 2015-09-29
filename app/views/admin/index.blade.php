@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <hgroup class="wrap">
        <h1>Panel de administración</h1>
    </hgroup>
    <section class="wrap">
        <ul class="list">
            <li>
                <h2>Resumen</h2>
                <h3>Hay {{ $contacts_count }} contactos.</h3>
                <h3>Hay 0 páginas</h3>
                <h3>Hay {{ $users_count }} usuarios</h3>
                <p class="lead">
                    Agrega un nuevo contacto en el botón <span>Agregar nuevo contacto</span>.
                </p>
            </li>
        </ul>
    </section>
@stop
