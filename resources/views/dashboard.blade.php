@extends('layouts.app')

@section('title', 'Administración | Josseline Farías Gallardo')

@section('content')

<section class="min-h-[calc(100vh-100px)] py-16 bg-gray-50">

    <div class="max-w-6xl mx-auto px-5">

        {{-- ENCABEZADO --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5 mb-10">

            <div>
                <h1 class="text-4xl font-bold text-gray-800">
                    Administración de proyectos
                </h1>

                <p class="text-gray-600 mt-2">
                    Gestiona los proyectos de tu portafolio.
                </p>
            </div>

            {{-- AGREGAR PROYECTO --}}
            <a
                href="{{ route('proyectos.create') }}"
                class="inline-block bg-blue-600 text-white px-6 py-3
                       rounded-lg font-semibold hover:bg-blue-700 transition"
            >
                + Agregar proyecto
            </a>

        </div>

        {{-- MENSAJE DE ÉXITO --}}
        @if (session('success'))

            <div class="bg-green-100 border border-green-300 text-green-700
                        px-5 py-4 rounded-lg mb-8">

                {{ session('success') }}

            </div>

        @endif

        {{-- PROYECTOS --}}
        @if ($proyectos->count())

            <div class="space-y-6">

                @foreach ($proyectos as $proyecto)

                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

                        <div class="p-6 flex flex-col md:flex-row gap-6">

                            {{-- IMAGEN --}}
                            <div class="w-full md:w-48 h-32 flex-shrink-0">

                                @if ($proyecto->imagen)

                                    <img
                                        src="{{ asset('storage/' . $proyecto->imagen) }}"
                                        alt="Imagen de {{ $proyecto->nombre }}"
                                        class="w-full h-full object-cover rounded-lg"
                                    >

                                @else

                                    <div class="w-full h-full bg-gray-200 rounded-lg
                                                flex items-center justify-center">

                                        <span class="text-gray-500 text-sm">
                                            Sin imagen
                                        </span>

                                    </div>

                                @endif

                            </div>

                            {{-- INFORMACIÓN --}}
                            <div class="flex-1">

                                <h2 class="text-2xl font-bold text-gray-800">
                                    {{ $proyecto->nombre }}
                                </h2>

                                <p class="text-blue-600 font-medium mt-1">
                                    {{ $proyecto->tecnologias }}
                                </p>

                                <p class="text-gray-600 mt-3">
                                    {{ $proyecto->descripcion }}
                                </p>

                            </div>

                            {{-- ACCIONES --}}
                            <div class="flex md:flex-col gap-3 justify-center">

                                <a
                                    href="{{ route('proyectos.edit', $proyecto) }}"
                                    class="bg-yellow-500 text-white px-5 py-2 rounded-lg
                                           font-semibold text-center hover:bg-yellow-600 transition"
                                >
                                    Editar
                                </a>

                                <form
                                    action="{{ route('proyectos.destroy', $proyecto) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="w-full bg-red-600 text-white px-5 py-2
                                               rounded-lg font-semibold
                                               hover:bg-red-700 transition"
                                        onclick="return confirm('¿Eliminar este proyecto?')"
                                    >
                                        Eliminar
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="bg-white p-10 rounded-2xl shadow text-center">

                <h2 class="text-2xl font-semibold text-gray-700">
                    No tienes proyectos registrados.
                </h2>

                <p class="text-gray-500 mt-2">
                    Comienza agregando tu primer proyecto.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection
