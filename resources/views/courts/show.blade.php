@extends('layouts.app')

@section('title', 'Detalle Cancha')

@section('content')
<h1>{{ $cancha['nombre'] }}</h1>

<a href="{{ route('canchas.index') }}">← Volver</a>

<p><strong>Tipo:</strong> {{ $cancha['tipo'] }}</p>
<p><strong>Precio por hora:</strong> ${{ number_format($cancha['precioHora'], 0, ',', '.') }}</p>
<p><strong>Estado:</strong> Disponible</p>

<a href="{{ route('reservas.create') }}">Reservar esta cancha</a>
@endsection