<x-guest-layout>
    <style>
        /* Custom CSS for Login Form */
        .login-form {
            background-image: linear-gradient(to bottom, #FFED4A, #FFA500);
            padding: 48px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-size: 18px;
            font-weight: 600;
            color: black;
        }

        .form-input {
            width: 100%;
            margin-top: 8px;
            padding: 12px;
            border-radius: 8px;
            border: none;
            outline: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .form-input:focus {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-checkbox {
            margin-top: 16px;
            color: white;
        }

        .form-checkbox input[type="checkbox"] {
            margin-right: 8px;
        }

        .form-button {
            margin-top: 24px;
            padding: 12px 24px;
            background-color: #FF6347;
            color: white;
            border: none;
            border-radius: 8px;
            outline: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-button:hover {
            background-color: #FF4500;
        }
    </style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <!-- Email Address -->
        <div class="mb-6">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="mb-6 form-checkbox">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember">
                <span class="text-sm">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit" class="form-button">{{ __('Log in') }}</button>
        </div>
    </form>
</x-guest-layout>
