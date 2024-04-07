<x-app-layout>
    <x-slot name="header">
        <style>
            /* Estilos relacionados con el fuego y Phoenix */
            .text-phoenix {
                color: #ff4500; /* Color de texto relacionado con Phoenix */
            }

            .bg-gradient-to-b {
                background: linear-gradient(to bottom, #FFB347, #FF8C00); /* Cambiar colores según prefieras */
            }

            /* Agrega más estilos relacionados con el fuego y Phoenix según necesites */
        </style>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-phoenix bg-gradient-to-b">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
