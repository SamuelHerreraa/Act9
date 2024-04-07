<x-guest-layout>
    <style>
        /* Estilos relacionados con el fuego y Phoenix */
        .bg-gradient-to-b {
            background: linear-gradient(to bottom, #FFB347, #FF8C00); /* Cambiar colores según prefieras */
        }

        .text-phoenix {
            color: #ff4500; /* Color de texto relacionado con Phoenix */
        }

        .btn-phoenix {
            background-color: #ff4500; /* Color de fondo del botón relacionado con Phoenix */
            color: #fff; /* Color de texto del botón */
        }

        .btn-phoenix:hover {
            background-color: #FF6347; /* Cambiar color de fondo del botón al pasar el mouse */
        }

        /* Agrega más estilos relacionados con el fuego y Phoenix según necesites */
    </style>

    <form method="POST" action="{{ route('register') }}" class="py-12 px-4 bg-gradient-to-b from-yellow-300 to-orange-500 rounded-lg shadow-md">
        @csrf

        <!-- Name -->
        <div class="mb-6">
            <x-input-label for="name" :value="__('Name')" class="text-lg font-semibold text-white" />
            <x-text-input id="name" class="block w-full mt-1 py-2 px-3 rounded-lg border-none focus:ring-2 focus:ring-yellow-300" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-500" />
        </div>

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" class="text-lg font-semibold text-white" />
            <x-text-input id="email" class="block w-full mt-1 py-2 px-3 rounded-lg border-none focus:ring-2 focus:ring-yellow-300" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" class="text-lg font-semibold text-white" />
            <x-text-input id="password" class="block w-full mt-1 py-2 px-3 rounded-lg border-none focus:ring-2 focus:ring-yellow-300" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-lg font-semibold text-white" />
            <x-text-input id="password_confirmation" class="block w-full mt-1 py-2 px-3 rounded-lg border-none focus:ring-2 focus:ring-yellow-300" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-500" />
        </div>

        <div class="flex items-center justify-between">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="py-2 px-6 btn-phoenix hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
