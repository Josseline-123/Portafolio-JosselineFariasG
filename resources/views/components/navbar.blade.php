<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <h2 class="text-xl font-bold text-gray-800">
            Josseline Farías Gallardo
        </h2>

        <ul class="flex items-center gap-6">

            <li>
                <a href="{{ url('/') }}"
                   class="text-gray-700 hover:text-blue-600 transition">
                    Inicio
                </a>
            </li>

            <li>
                <a href="{{ url('/sobre-mi') }}"
                   class="text-gray-700 hover:text-blue-600 transition">
                    Sobre mí
                </a>
            </li>

            <li>
                <a href="{{ url('/proyectos') }}"
                   class="text-gray-700 hover:text-blue-600 transition">
                    Proyectos
                </a>
            </li>

            <li>
                <a href="{{ url('/contacto') }}"
                   class="text-gray-700 hover:text-blue-600 transition">
                    Contacto
                </a>
            </li>

            @guest
                <li>
                    <a href="{{ route('login') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Iniciar sesión
                    </a>
                </li>
            @endguest

            @auth
                <li>
                    <a href="{{ route('dashboard') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Administración
                    </a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit"
                                class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
            @endauth

        </ul>

    </div>
</nav>