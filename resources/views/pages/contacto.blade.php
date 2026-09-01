@extends('layouts.app')

@section('title', 'Contacto | Josseline Farías Gallardo')

@section('content')

<section class="min-h-[calc(100vh-100px)] py-16 bg-gray-50">

    <div class="max-w-6xl mx-auto px-5">

        <!-- ENCABEZADO -->

        <div class="text-center mb-14">

            <h1 class="text-5xl font-bold text-gray-800 mb-5">
                Contacto
            </h1>

            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                ¿Tienes un proyecto, una oportunidad laboral o quieres
                conocer más sobre mi trabajo? ¡Me gustaría conversar contigo!
            </p>

        </div>


        <!-- CONTACTO -->

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">

            <!-- INFORMACIÓN -->

            <div class="bg-white rounded-2xl shadow-lg p-8">

                <h2 class="text-3xl font-bold text-blue-600 mb-6">
                    Hablemos
                </h2>

                <p class="text-gray-600 leading-relaxed mb-8">
                    Estoy interesada en oportunidades relacionadas con
                    desarrollo web y desarrollo Full Stack.
                    Puedes encontrarme en los siguientes medios:
                </p>


                <!-- EMAIL -->

                <div class="mb-6">

                    <h3 class="font-bold text-gray-800 mb-2">
                        📧 Email
                    </h3>

                    <a
                        href="mailto:{{ config('mail.from.address', env('MAIL_FROM_ADDRESS', 'hola@example.com')) }}"
                        class="text-blue-600 hover:text-blue-800 transition"
                    >
                        {{ config('mail.from.address', env('MAIL_FROM_ADDRESS', 'hola@example.com')) }}
                    </a>

                </div>


                <!-- LINKEDIN -->

               <!-- LINKEDIN -->

<div class="mb-6">

    <h3 class="font-bold text-gray-800 mb-2">
        💼 LinkedIn
    </h3>

    <a
        href="https://www.linkedin.com/in/josseline-farías-gallardo-3b2345123"
        target="_blank"
        rel="noopener noreferrer"
        class="text-blue-600 hover:text-blue-800 transition"
    >
        Ver mi perfil de LinkedIn
    </a>

</div>


                <!-- GITHUB -->

                <div>

                    <h3 class="font-bold text-gray-800 mb-2">
                        💻 GitHub
                    </h3>

                    <a
                        href="https://github.com/Josseline-123""
                        target="_blank"
                        class="text-blue-600 hover:text-blue-800 transition"
                    >
                        Ver mis proyectos en GitHub
                    </a>

                </div>

            </div>


            <!-- MENSAJE -->

            <div class="bg-white rounded-2xl shadow-lg p-8">

                <h2 class="text-3xl font-bold text-blue-600 mb-6">
                    Envíame un mensaje
                </h2>

               <form method="POST" action="{{ url('/contacto') }}">
    @csrf

    <!-- NOMBRE -->

    <div class="mb-5">

        <label
            for="nombre"
            class="block text-gray-700 font-semibold mb-2"
        >
            Nombre
        </label>

        <input
            type="text"
            id="nombre"
            name="nombre"
            value="{{ old('nombre') }}"
            placeholder="Tu nombre"
            class="w-full border border-gray-300 rounded-lg px-4 py-3
                   focus:outline-none focus:ring-2 focus:ring-blue-500"
        >

        @error('nombre')
            <p class="text-red-600 text-sm mt-2">
                {{ $message }}
            </p>
        @enderror

    </div>


    <!-- EMAIL -->

    <div class="mb-5">

        <label
            for="email"
            class="block text-gray-700 font-semibold mb-2"
        >
            Email
        </label>

        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="tu@email.com"
            class="w-full border border-gray-300 rounded-lg px-4 py-3
                   focus:outline-none focus:ring-2 focus:ring-blue-500"
        >

        @error('email')
            <p class="text-red-600 text-sm mt-2">
                {{ $message }}
            </p>
        @enderror

    </div>


    <!-- MENSAJE -->

    <div class="mb-6">

        <label
            for="mensaje"
            class="block text-gray-700 font-semibold mb-2"
        >
            Mensaje
        </label>

        <textarea
            id="mensaje"
            name="mensaje"
            rows="5"
            placeholder="Escribe tu mensaje..."
            class="w-full border border-gray-300 rounded-lg px-4 py-3
                   focus:outline-none focus:ring-2 focus:ring-blue-500"
        >{{ old('mensaje') }}</textarea>

        @error('mensaje')
            <p class="text-red-600 text-sm mt-2">
                {{ $message }}
            </p>
        @enderror

    </div>


    <!-- BOTÓN -->

    <button
        type="submit"
        class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg
               font-bold hover:bg-blue-700 transition"
    >
        Enviar mensaje
    </button>

</form>
            </div>

        </div>

    </div>

</section>

@endsection