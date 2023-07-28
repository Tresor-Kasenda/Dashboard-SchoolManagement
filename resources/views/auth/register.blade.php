@php use App\Enums\UserTypeEnum; @endphp
<x-guest-layout title="Registration">
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <div class="px-24 py-14 items-center justify-center space-y-1">
        <h1 class="text-3xl font-medium text-gray-900 dark:text-white">
            Create account
        </h1>
        <p class="font-light text-light text-gray-500">
            Get access to exclusive sass.
        </p>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <div>
                <x-input-label for="user_type" :value="__('Type user')"/>
                <x-select
                    id="user_type"
                    class="block mt-1 w-full focus:outline-none text-sm placeholder-gray-400 placeholder:text-sm text-gray-700"
                    name="user_type"
                    :options="UserTypeEnum::cases()"
                    :selected="old('user_type')"
                    placeholder="Select your type user"
                    required
                    autocomplete="user_type"/>
            </div>
            <div>
                <x-input-label for="name" :value="__('Name')"/>
                <x-text-input
                    id="name"
                    class="block mt-1 w-full focus:outline-none placeholder-gray-400 placeholder:text-sm text-gray-700"
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
                    class="block mt-1 w-full focus:outline-none placeholder-gray-400 placeholder:text-sm text-gray-700"
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
                    class="block mt-1 w-full focus:outline-none placeholder-gray-400 placeholder:text-sm text-gray-700"
                    type="password"
                    placeholder="Enter your password"
                    name="password"
                    required
                    autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <div>
                <x-input-label for="password" :value="__('Password confirmation')"/>

                <x-text-input
                    id="password_confirmation"
                    class="block mt-1 w-full focus:outline-none placeholder-gray-400 placeholder:text-sm text-gray-700"
                    type="password"
                    placeholder="Enter your password confirmation"
                    name="password_confirmation"
                    required
                    autocomplete="password_confirmation"/>

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
