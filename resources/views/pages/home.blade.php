@extends('layouts.app')

@section('title', 'Inicio | Josseline Farías Gallardo')

@section('content')

<section class="min-h-[calc(100vh-100px)] flex items-center py-16 bg-gray-50">


<div class="max-w-6xl mx-auto px-5 w-full">

    <div class="max-w-4xl">

        <p class="text-blue-600 font-semibold text-lg mb-3">
            Hola, soy Josseline Farías Gallardo 👋
        </p>

        <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6">
            Desarrolladora Full Stack
        </h1>

        <p class="text-xl text-gray-600 leading-relaxed mb-8">
            Ingeniera en Química con experiencia en operaciones, producción
            y logística, actualmente especializada en desarrollo de
            aplicaciones web Full Stack con JavaScript, TypeScript, React,
            Node.js, PHP y Laravel.
        </p>

        <!-- BOTONES -->

        <div class="flex flex-wrap gap-4 mb-12">

            <a
                href="{{ url('/proyectos') }}"
                class="inline-block bg-blue-600 text-white px-7 py-3 rounded-lg
                       font-bold hover:bg-blue-700 transition"
            >
                Ver proyectos
            </a>

            <a
                href="{{ url('/contacto') }}"
                class="inline-block border-2 border-blue-600 text-blue-600
                       px-7 py-3 rounded-lg font-bold
                       hover:bg-blue-600 hover:text-white transition"
            >
                Contactarme
            </a>

        </div>

        <!-- TECNOLOGÍAS -->

        <div>

            <h2 class="text-2xl font-bold text-gray-800 mb-5">
                Tecnologías
            </h2>

            <div class="flex flex-wrap gap-3">

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    HTML
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    CSS
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    JavaScript
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    TypeScript
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    React
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    Node.js
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    Express
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    PHP
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    Laravel
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    PostgreSQL
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    MySQL
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    SQL
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    Git / GitHub
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    Docker
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    Vite
                </span>

                <span class="bg-white px-5 py-2 rounded-lg shadow-sm text-gray-700 font-semibold">
                    Tailwind CSS
                </span>

            </div>

        </div>

    </div>

</div>


</section>

@endsection
