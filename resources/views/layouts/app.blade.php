<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Canchas')</title>
</head>

<body>

    <nav>
        <a href="{{ route('inicio') }}">Inicio</a> |
        <a href="{{ route('canchas.index') }}">Canchas</a> |
        <a href="{{ route('reservas.index') }}">Reservas</a> |
        <a href="{{ route('reportes.monthly') }}">Reportes</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>

</body>

</html>