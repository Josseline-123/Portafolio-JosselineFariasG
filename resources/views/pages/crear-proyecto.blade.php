@extends('layouts.app')

@section('title', 'Agregar proyecto | Josseline Farías Gallardo')

@section('content')

<section class="min-h-[calc(100vh-100px)] py-16 bg-gray-50">

```
<div class="max-w-3xl mx-auto px-5">

    <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10">

        <h1 class="text-4xl font-bold text-gray-800 mb-3">
            Agregar proyecto
        </h1>

        <p class="text-gray-600 mb-8">
            Completa los datos del nuevo proyecto.
        </p>


        {{-- MENSAJES DE ERROR --}}

        @if ($errors->any())

            <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-6">

                <ul class="list-disc pl-5">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- FORMULARIO --}}

        <form
            action="{{ url('/proyectos') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            {{-- NOMBRE --}}

            <div class="mb-6">

                <label class="block text-gray-700 font-bold mb-2">
                    Nombre del proyecto
                </label>

                <input
                    type="text"
                    name="nombre"
                    value="{{ old('nombre') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Ej: BestPet"
                    required
                >

            </div>


            {{-- DESCRIPCIÓN --}}

            <div class="mb-6">

                <label class="block text-gray-700 font-bold mb-2">
                    Descripción
                </label>

                <textarea
                    name="descripcion"
                    rows="5"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Describe brevemente tu proyecto"
                    required
                >{{ old('descripcion') }}</textarea>

            </div>


            {{-- IMAGEN --}}

            <div class="mb-6">

                <label class="block text-gray-700 font-bold mb-2">
                    Imagen del proyecto
                </label>

                <input
                    type="file"
                    name="imagen"
                    accept="image/jpeg,image/png,image/webp"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500"
                >

                <p class="text-sm text-gray-500 mt-2">
                    Formatos permitidos: JPG, PNG o WEBP. Máximo 2 MB.
                </p>

            </div>


            {{-- TECNOLOGÍAS --}}

            <div class="mb-6">

                <label class="block text-gray-700 font-bold mb-2">
                    Tecnologías
                </label>

                <input
                    type="text"
                    name="tecnologias"
                    value="{{ old('tecnologias') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Ej: Laravel, PHP, MySQL, Tailwind CSS"
                    required
                >

            </div>


            {{-- GITHUB --}}

            <div class="mb-6">

                <label class="block text-gray-700 font-bold mb-2">
                    GitHub
                </label>

                <input
                    type="url"
                    name="github"
                    value="{{ old('github') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="https://github.com/..."
                >

            </div>


            {{-- DEMO --}}

            <div class="mb-8">

                <label class="block text-gray-700 font-bold mb-2">
                    Demo / proyecto desplegado
                </label>

                <input
                    type="url"
                    name="demo"
                    value="{{ old('demo') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="https://..."
                >

            </div>


            {{-- BOTONES --}}

            <div class="flex flex-wrap gap-4">

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-7 py-3 rounded-lg
                           font-bold hover:bg-blue-700 transition"
                >
                    Guardar proyecto
                </button>

                <a
                    href="{{ url('/proyectos') }}"
                    class="border-2 border-gray-400 text-gray-700
                           px-7 py-3 rounded-lg font-bold
                           hover:bg-gray-100 transition"
                >
                    Cancelar
                </a>

            </div>

        </form>

    </div>

</div>
```

</section>

@endsection
