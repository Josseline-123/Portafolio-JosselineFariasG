@extends('layouts.app')

@section('title', 'Proyectos | Josseline Farías Gallardo')

@section('content')

<section class="min-h-[calc(100vh-100px)] py-16 bg-gray-50">


<div class="max-w-6xl mx-auto px-5">

    {{-- ENCABEZADO --}}

    <div class="text-center mb-14">

        <h1 class="text-5xl font-bold text-gray-800 mb-5">
            Mis proyectos
        </h1>

        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Algunos de los proyectos que he desarrollado durante mi
            formación como Desarrolladora Full Stack.
        </p>

    </div>


    {{-- PROYECTOS --}}

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        @forelse ($proyectos as $proyecto)

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                        hover:shadow-2xl transition duration-300">

                {{-- IMAGEN DEL PROYECTO --}}

                @if ($proyecto->imagen)

                    <div class="w-full h-64 overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('storage/' . $proyecto->imagen) }}"
                            alt="Imagen del proyecto {{ $proyecto->nombre }}"
                            class="w-full h-full object-cover
                                   hover:scale-105 transition duration-500"
                        >

                    </div>

                @else

                    <div class="w-full h-64 bg-gray-200 flex items-center justify-center">

                        <p class="text-gray-500">
                            Sin imagen disponible
                        </p>

                    </div>

                @endif


                {{-- ENCABEZADO DEL PROYECTO --}}

                <div class="bg-blue-600 text-white p-8">

                    <h2 class="text-3xl font-bold">
                        {{ $proyecto->nombre }}
                    </h2>

                    <p class="text-blue-100 mt-2">
                        {{ $proyecto->tecnologias }}
                    </p>

                </div>


                {{-- CONTENIDO --}}

                <div class="p-8">

                    <p class="text-gray-600 leading-relaxed mb-7">
                        {{ $proyecto->descripcion }}
                    </p>


                    {{-- BOTONES PÚBLICOS --}}

                    <div class="flex flex-wrap gap-3">

                        @if ($proyecto->demo)

                            <a
                                href="{{ $proyecto->demo }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-block bg-blue-600 text-white px-6 py-3
                                       rounded-lg font-bold hover:bg-blue-700
                                       transition"
                            >
                                Ver proyecto
                            </a>

                        @endif


                        @if ($proyecto->github)

                            <a
                                href="{{ $proyecto->github }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-block bg-gray-800 text-white px-6 py-3
                                       rounded-lg font-bold hover:bg-gray-900
                                       transition"
                            >
                                Ver código
                            </a>

                        @endif

                    </div>

                </div>

            </div>

        @empty

            <div class="col-span-full text-center py-12">

                <h2 class="text-2xl font-semibold text-gray-700">
                    Todavía no hay proyectos publicados.
                </h2>

            </div>

        @endforelse

    </div>

</div>


</section>

@endsection
