<x-guest-layout title="Authentication">
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <div
        class="p-24 items-center mt-16 justify-center">
        <h1 class="text-4xl font-medium text-gray-900 dark:text-white">
            Welcome to Vinco
        </h1>

        <form method="POST" action="{{ route('login') }}" class="space-y-8">
            @csrf
            <div>
                <x-input-label for="email" :value="__('Email')"/>
                <x-text-input
                    id="email"
                    class="block mt-1 w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 placeholder:text-sm rounded-md placeholder-gray-400"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    placeholder="Your email address"
                    autocomplete="username"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>

                <x-text-input
                    id="password"
                    class="block mt-1 w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 placeholder:text-sm rounded-md placeholder-gray-400"
                    type="password"
                    name="password"
                    placeholder="Your password"
                    required autocomplete="current-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <div class="mt-4 flex items-center justify-between">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                           name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('register') }}">
                    You don't have an account?
                </a>
                <x-primary-button class="ml-4">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
