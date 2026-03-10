@extends('layouts.app')

@section('title', 'Nueva Reserva')

@section('content')
<h1>Nueva Reserva</h1>

<a href="{{ route('reservas.index') }}">← Volver</a>

<form action="{{ route('reservas.index') }}" method="POST">
    @csrf

    <p>
        <label for="cliente">Nombre del cliente:</label><br>
        <input type="text" id="cliente" name="cliente" value="{{ old('cliente') }}" required>
        @error('cliente') <small>{{ $message }}</small> @enderror
    </p>

    <p>
        <label for="cancha_id">Cancha:</label><br>
        <select id="cancha_id" name="cancha_id" required>
            <option value="">Selecciona una cancha</option>
            @isset($canchas)
            @foreach($canchas as $i => $cancha)
            <option value="{{ $i }}" {{ old('cancha_id')==$i ? 'selected' : '' }}>
                {{ $cancha['nombre'] }} — ${{ number_format($cancha['precioHora'], 0, ',', '.') }}/h
            </option>
            @endforeach
            @else
            <option value="0">Cancha 1: Tenis A</option>
            <option value="1">Cancha 2: Fútbol 5</option>
            <option value="2">Cancha 3: Tenis B</option>
            @endisset
        </select>
        @error('cancha_id') <small>{{ $message }}</small> @enderror
    </p>

    <p>
        <label for="fecha">Fecha:</label><br>
        <input type="date" id="fecha" name="fecha" value="{{ old('fecha', date('Y-m-d')) }}" min="{{ date('Y-m-d') }}"
            required>
        @error('fecha') <small>{{ $message }}</small> @enderror
    </p>

    <p>
        <label for="hora">Hora de inicio:</label><br>
        <input type="time" id="hora" name="hora" value="{{ old('hora', '08:00') }}" required>
        @error('hora') <small>{{ $message }}</small> @enderror
    </p>

    <p>
        <label for="duracion">Duración (horas):</label><br>
        <select id="duracion" name="duracion">
            <option value="1" {{ old('duracion', '1' )==='1' ? 'selected' : '' }}>1 hora</option>
            <option value="2" {{ old('duracion')==='2' ? 'selected' : '' }}>2 horas</option>
            <option value="3" {{ old('duracion')==='3' ? 'selected' : '' }}>3 horas</option>
            <option value="4" {{ old('duracion')==='4' ? 'selected' : '' }}>4 horas</option>
        </select>
    </p>

    <button type="submit">Guardar</button>
    <a href="{{ route('reservas.index') }}">Cancelar</a>
</form>
@endsection