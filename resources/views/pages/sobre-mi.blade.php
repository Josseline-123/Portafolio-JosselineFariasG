@extends('layouts.app')

@section('title', 'Sobre mí | Josseline Farías Gallardo')

@section('content')

<section class="min-h-[calc(100vh-100px)] py-16 bg-gray-50">


<div class="max-w-6xl mx-auto px-5">

    <!-- ENCABEZADO -->

    <div class="text-center mb-14">

        <h1 class="text-5xl font-bold text-gray-800 mb-5">
            Sobre mí
        </h1>

        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Desarrolladora Full Stack con experiencia en desarrollo web,
            operaciones, producción y gestión de procesos.
        </p>

    </div>


    <!-- PERFIL -->

    <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10 mb-10">

        <h2 class="text-3xl font-bold text-blue-600 mb-6">
            Mi perfil
        </h2>

        <p class="text-lg text-gray-600 leading-relaxed mb-5">
            Desarrolladora Full Stack con formación en desarrollo de software
            y experiencia práctica en la construcción de aplicaciones web,
            integrando tecnologías Frontend y Backend, bases de datos,
            APIs REST y servicios externos.
        </p>

        <p class="text-lg text-gray-600 leading-relaxed mb-5">
            Cuento con conocimientos en PHP, Laravel, React, TypeScript,
            JavaScript, Node.js, Express, SQL, PostgreSQL, MySQL, HTML,
            CSS y Docker, además de experiencia utilizando Git/GitHub,
            Vite y Tailwind CSS.
        </p>

        <p class="text-lg text-gray-600 leading-relaxed mb-5">
            He desarrollado proyectos Full Stack, participando en distintas
            etapas del desarrollo, desde la creación de interfaces y
            componentes reutilizables hasta la implementación de lógica
            de negocio, APIs, autenticación, bases de datos y despliegue.
        </p>

        <p class="text-lg text-gray-600 leading-relaxed">
            Mi experiencia previa como Ingeniera en Química y en áreas de
            operaciones, producción, logística y gestión aporta una sólida
            capacidad analítica, resolución de problemas, organización y
            adaptación a distintos equipos y tecnologías.
        </p>

    </div>


    <!-- FORMACIÓN Y EXPERIENCIA -->

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">

        <!-- FORMACIÓN -->

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <h2 class="text-2xl font-bold text-blue-600 mb-6">
                Formación
            </h2>

            <div class="space-y-6">

                <div>
                    <h3 class="text-xl font-bold text-gray-800">
                        Ingeniería en Química
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Universidad Tecnológica Metropolitana
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-gray-800">
                        Diplomado en Gestión de Operaciones
                        y Cadena de Suministros
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Universidad de Chile
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-gray-800">
                        Desarrollo Full Stack
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Desafío Latam
                    </p>
                </div>

            </div>

        </div>


        <!-- EXPERIENCIA -->

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <h2 class="text-2xl font-bold text-blue-600 mb-6">
                Experiencia
            </h2>

            <div class="space-y-6">

                <div>
                    <h3 class="text-xl font-bold text-gray-800">
                        Operaciones y Producción
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Experiencia en gestión de procesos,
                        producción y coordinación de operaciones.
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-gray-800">
                        Logística
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Experiencia en planificación, coordinación
                        y gestión de operaciones logísticas.
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-gray-800">
                        Desarrollo Web
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Desarrollo de aplicaciones Full Stack utilizando
                        tecnologías frontend, backend, APIs, bases de
                        datos y servicios externos.
                    </p>
                </div>

            </div>

        </div>

    </div>


    <!-- TECNOLOGÍAS -->

    <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10">

        <h2 class="text-3xl font-bold text-blue-600 mb-6">
            Tecnologías
        </h2>

        <div class="flex flex-wrap gap-3">

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                HTML
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                CSS
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                JavaScript
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                TypeScript
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                React
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                Node.js
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                Express
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                PHP
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                Laravel
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                PostgreSQL
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                MySQL
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                SQL
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                Git / GitHub
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                Docker
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                Vite
            </span>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                Tailwind CSS
            </span>

        </div>

    </div>

</div>


</section>

@endsection
