@extends('layouts.app')

@section('title', 'Nueva Cancha')

@section('content')
<h1>Nueva Cancha</h1>

<a href="{{ route('canchas.index') }}">← Volver</a>

<form action="{{ route('canchas.index') }}" method="POST">
    @csrf

    <p>
        <label for="nombre">Nombre de la cancha:</label><br>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
        @error('nombre') <small>{{ $message }}</small> @enderror
    </p>

    <p>
        <label for="tipo">Tipo de deporte:</label><br>
        <select id="tipo" name="tipo" required>
            <option value="">Selecciona un deporte</option>
            <option value="Tenis" {{ old('tipo')==='Tenis' ? 'selected' : '' }}>Tenis</option>
            <option value="Fútbol" {{ old('tipo')==='Fútbol' ? 'selected' : '' }}>Fútbol</option>
            <option value="Baloncesto" {{ old('tipo')==='Baloncesto' ? 'selected' : '' }}>Baloncesto</option>
            <option value="Volleyball" {{ old('tipo')==='Volleyball' ? 'selected' : '' }}>Volleyball</option>
            <option value="Pádel" {{ old('tipo')==='Pádel' ? 'selected' : '' }}>Pádel</option>
        </select>
        @error('tipo') <small>{{ $message }}</small> @enderror
    </p>

    <p>
        <label for="precioHora">Precio por hora:</label><br>
        <input type="number" id="precioHora" name="precioHora" value="{{ old('precioHora') }}" min="1000" required>
        @error('precioHora') <small>{{ $message }}</small> @enderror
    </p>

    <button type="submit">Guardar</button>
    <a href="{{ route('canchas.index') }}">Cancelar</a>
</form>
@endsection