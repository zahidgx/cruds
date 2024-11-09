<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bienvenido | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen bg-gr<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bienvenido | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Importar Bootstrap CSS (desde CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen bg-gray-100">
        <x-banner /> <!-- Aquí puedes tener tu banner o mensaje si tienes uno -->

        <div class="flex justify-center items-center h-full">
            <div class="text-center p-8 bg-white shadow-lg rounded-lg">
                <h1 class="text-4xl font-bold mb-4 text-gray-900">Bienvenido a BAJEZA - {{ config('app.name') }}</h1>
                <p class="text-lg mb-8 text-gray-700">Por favor, selecciona una opción para continuar:</p>
                <div class="flex justify-center space-x-6">
                    <!-- Botón con Bootstrap, con clases personalizadas -->
                    <a href="{{ route('login') }}" class="btn btn-primary px-6 py-3 text-white rounded-md hover:bg-blue-700 transition">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="btn btn-success px-6 py-3 text-white rounded-md hover:bg-green-700 transition">Registrarse</a>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts

    <!-- Cargar Bootstrap JS (desde CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
ay-100">
        <x-banner /> <!-- Aquí puedes tener tu banner o mensaje si tienes uno -->

        <div class="flex justify-center items-center h-full">
            <div class="text-center p-8 bg-white shadow-lg rounded-lg">
                <h1 class="text-4xl font-bold mb-4 text-gray-900">Bienvenido a BAJEZA - {{ config('app.name') }}</h1>
                <p class="text-lg mb-8 text-gray-700">Por favor, selecciona una opción para continuar:</p>
                <div class="flex justify-center space-x-6">
                    <!-- Botón con texto oscuro en lugar de blanco -->
                    <a href="{{ route('login') }}" class="px-6 py-3 text-black bg-blue-500 rounded-md hover:bg-blue-700 transition">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="px-6 py-3 text-black bg-green-500 rounded-md hover:bg-green-700 transition">Registrarse</a>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>




