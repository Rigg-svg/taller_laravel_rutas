@extends('layouts.app')

@section('title', 'Canchas')

@section('content')
<h1>Lista de Canchas</h1>

<a href="{{ route('canchas.create') }}">Nueva Cancha</a>

@if(empty($canchas))
<p>No hay canchas registradas.</p>
@else
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio / hora</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($canchas as $i => $cancha)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $cancha['nombre'] }}</td>
            <td>{{ $cancha['tipo'] }}</td>
            <td>${{ number_format($cancha['precioHora'], 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('canchas.show', $i) }}">Ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection