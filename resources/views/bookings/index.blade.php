@extends('layouts.app')

@section('title', 'Reservas')

@section('content')
<h1>Reservas</h1>

<a href="{{ route('reservas.create') }}">Nueva Reserva</a>

@php $reservas = $reservas ?? []; @endphp

@if(empty($reservas))
<p>No hay reservas registradas.</p>
@else
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Cancha</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Total</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reservas as $i => $reserva)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $reserva['cliente'] }}</td>
            <td>{{ $reserva['cancha'] }}</td>
            <td>{{ $reserva['fecha'] }}</td>
            <td>{{ $reserva['hora'] }}</td>
            <td>${{ number_format($reserva['total'] ?? 0, 0, ',', '.') }}</td>
            <td>{{ ucfirst($reserva['estado'] ?? 'pendiente') }}</td>
            <td>
                <a href="{{ route('reservas.show', $i) }}">Ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection