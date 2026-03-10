@extends('layouts.app')

@section('title', 'Reporte Mensual')

@section('content')

<h1>Reporte Mensual — Marzo</h1>

<p><strong>Total reservas:</strong> {{ $resumenMes['reservas'] }}</p>
<p><strong>Ganancias:</strong> ${{ number_format($resumenMes['ganancias'], 2, ',', '.') }}</p>
<p><strong>Promedio por reserva:</strong> ${{ number_format($resumenMes['promedio'], 2, ',', '.') }}</p>

@endsection