@extends('layouts.app')

@section('title', 'Detalle de Reserva')

@section('content')

<h1>Reserva de {{ $reserva['cliente'] }}</h1>

<a href="{{ route('reservas.index') }}">Volver</a>

<p><strong>Cliente:</strong> {{ $reserva['cliente'] }}</p>
<p><strong>Cancha:</strong> {{ $reserva['cancha'] }}</p>
<p><strong>Fecha:</strong> {{ $reserva['fecha'] }}</p>
<p><strong>Hora:</strong> {{ $reserva['hora'] }}</p>
<p><strong>Duración:</strong> {{ $reserva['duracion'] ?? 1 }} hora(s)</p>
<p><strong>Total:</strong> ${{ number_format($reserva['total'] ?? 0, 0, ',', '.') }} COP</p>
<p><strong>Estado:</strong> {{ ucfirst($reserva['estado'] ?? 'pendiente') }}</p>

<a href="{{ route('reservas.create') }}">Nueva Reserva</a>
@endsection