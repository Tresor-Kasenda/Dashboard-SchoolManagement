<x-guest-layout title="Registration">
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <div
        class="px-24 py-20 items-center justify-center">
        <h1 class="text-4xl font-medium text-gray-900 dark:text-white">
            Welcome to Vinco
        </h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <div>
                <x-input-label for="name" :value="__('Name')"/>
                <x-text-input
                    id="name"
                    class="block mt-1 w-full placeholder-gray-400 placeholder:text-sm text-gray-700"
                    type="text" name="name"
                    :value="old('name')"
                    required
                    autofocus
                    placeholder="Enter your name"
                    autocomplete="name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')"/>
                <x-text-input
                    id="email"
                    class="block mt-1 w-full placeholder-gray-400 placeholder:text-sm text-gray-700"
                    type="email"
                    name="email"
                    placeholder="Enter your email address"
                    :value="old('email')"
                    required
                    autocomplete="username"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>

            <div>
                <x-input-label for="password" :value="__('Password')"/>

                <x-text-input
                    id="password"
                    class="block mt-1 w-full placeholder-gray-400 placeholder:text-sm text-gray-700"
                    type="password"
                    placeholder="Enter your password"
                    name="password"
                    required
                    autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-text-input
                    id="password_confirmation"
                    class="block mt-1 w-full placeholder-gray-400 placeholder:text-sm text-gray-700"
                    type="password"
                    placeholder="Confirm your password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
            </div>

            <div class="flex items-center justify-between">
                <a class="text-sm text-indigo-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
