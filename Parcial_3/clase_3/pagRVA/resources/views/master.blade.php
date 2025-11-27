<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
</head>
<body>
    {{-- Encabezado fijo --}}
    <header style="margin-bottom: 20px;">
        <a href="/roja">Página roja</a> |
        <a href="/verde">Página verde</a> |
        <a href="/azul">Página azul</a>
    </header>
    {{-- Aquí se carga el contenido dinámico --}}
    <section>
        @yield('contenido')
    </section>
</body>
</html>
