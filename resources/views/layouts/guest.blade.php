<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Iniciar sesión | Josseline Farías Gallardo</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    @include('components.navbar')

    <main class="min-h-[calc(100vh-140px)] flex items-center justify-center px-5 py-16">

        <div class="w-full max-w-md">

            <div class="bg-white rounded-2xl shadow-xl p-8">

                <h1 class="text-3xl font-bold text-gray-800 text-center mb-2">
                    Iniciar sesión
                </h1>

                <p class="text-center text-gray-500 mb-8">
                    Accede a la administración de tu portafolio
                </p>

                {{ $slot }}

            </div>

        </div>

    </main>

    @include('components.footer')

</body>

</html>
