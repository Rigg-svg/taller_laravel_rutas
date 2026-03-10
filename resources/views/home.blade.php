@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<h1>Bienvenido al Sistema de Canchas</h1>

<p>Selecciona una opción del menú para continuar.</p>

<ul>
    <li><a href="{{ route('canchas.index') }}">Ver Canchas</a></li>
    <li><a href="{{ route('reservas.index') }}">Ver Reservas</a></li>
    <li><a href="{{ route('reportes.monthly') }}">Ver Reporte Mensual</a></li>
</ul>
@endsection