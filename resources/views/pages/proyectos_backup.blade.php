@extends('layouts.app')

@section('title', 'Proyectos | Josseline Farías Gallardo')

@section('content')

<section class="min-h-[calc(100vh-100px)] py-16 bg-gray-50">

    <div class="max-w-6xl mx-auto px-5">

        <div class="text-center mb-14">

            <h1 class="text-5xl font-bold text-gray-800 mb-5">
                Mis proyectos
            </h1>

            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Algunos de los proyectos que he desarrollado durante mi
                formación como Desarrolladora Full Stack.
            </p>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- PORTAFOLIO -->

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                        hover:shadow-2xl transition duration-300">

                <div class="bg-gray-800 text-white p-8">

                    <div class="text-5xl mb-4">
                        💻
                    </div>

                    <h2 class="text-3xl font-bold">
                        Portafolio Profesional
                    </h2>

                    <p class="text-gray-300 mt-2">
                        Laravel · Blade · PHP · Tailwind CSS · Vite
                    </p>

                </div>

                <div class="p-8">

                    <p class="text-gray-600 leading-relaxed mb-7">
                        Portafolio web desarrollado para presentar mi perfil
                        profesional, habilidades, experiencia y proyectos,
                        aplicando Laravel, Blade, PHP, Tailwind CSS y Vite.
                    </p>

                    <a
                        href="{{ url('/') }}"
                        class="inline-block bg-blue-600 text-white px-6 py-3
                               rounded-lg font-bold hover:bg-blue-700
                               transition"
                    >
                        🌐 Ver proyecto
                    </a>

                </div>

            </div>


            <!-- BESTPET -->

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                        hover:shadow-2xl transition duration-300">

                <div class="bg-blue-600 text-white p-8">

                    <div class="text-5xl mb-4">
                        🐾
                    </div>

                    <h2 class="text-3xl font-bold">
                        BestPet
                    </h2>

                    <p class="text-blue-100 mt-2">
                        React · Node.js · Express · PostgreSQL · Sequelize
                    </p>

                </div>

                <div class="p-8">

                    <p class="text-gray-600 leading-relaxed mb-7">
                        Marketplace para productos y servicios para mascotas,
                        desarrollado como proyecto Full Stack utilizando React,
                        Node.js, Express, PostgreSQL y Sequelize.
                    </p>

                    <div class="flex flex-wrap gap-3">

                        <!-- PROYECTO DESPLEGADO -->
                        <a
                            href="https://pffronend.vercel.app/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-block bg-blue-600 text-white px-6 py-3
                                   rounded-lg font-bold hover:bg-blue-700
                                   transition"
                        >
                            🌐 Ver proyecto
                        </a>

                        <!-- GITHUB -->
                        <a
                            href="https://github.com/Josseline-123"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-block bg-gray-800 text-white px-6 py-3
                                   rounded-lg font-bold hover:bg-gray-900
                                   transition"
                        >
                            💻 Ver código
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection