<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>@yield('titulo',default:'EL BUENO')</title>
</head>
<body>
    <header>
        {{-- Incluye el componente de navegación (barra de menú) desde layouts/navbar.blade.php --}}
        @include('layouts.navbar')
    </header>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <main>
        {{-- Aquí se inyecta el contenido específico de cada vista hija --}}
        @yield('contenido')
    </main>
    <footer>
        {{-- Incluye el componente de pie de página desde layouts/footer.blade.php --}}
        @include('layouts.footer')
    </footer>
</body>
</html>