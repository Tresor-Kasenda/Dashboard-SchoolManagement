@props(['title'])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | {{ $title ?? "" }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div
    class="min-h-screen grid grid-cols-2 max-sm:grid-cols-1 sm:grid-col-1 md:grid-cols-2 md:gap-4 lg:grid-cols-2 gap-4">
    <div class="relative bg-red-500 bg-opacity-40 max-sm:hidden sm:hidden md:block">
        <img src="{{ asset('images/profile.jpg') }}" class="absolute inset-0 object-cover overflow-hidden w-full h-full"
             alt="">
        <div class="absolute bg-indigo-900/60 inset-0"></div>
        <div class="relative max-w-7xl mx-auto py-10 px-16 flex flex-col space-y-64">
            <h1 class="text-6xl text-white tracking-widest font-bold">
                <a href="{{ route('home') }}">Vinco</a>
            </h1>

            <p class="text-white text-xl font-medium leading-9 bottom-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim itaque magnam mollitia nisi voluptate
            </p>
        </div>
    </div>
    <div
        class="px-32 py-20 max-sm:px-8 max-sm:py-14 space-y-6 sm:px-10 sm:py-10 sm:col-span-2 md:col-span-1 lg:col-span-1 md:px-32 md:py-20 lg:px-32 lg:py-20">
        <div class="space-y-5">
            <h1 class="text-4xl text-gray-700 decoration-2 dark:text-white">
                Start your <br> <span class="font-bold">30-day free trial</span>
            </h1>
        </div>

        <button
            class="w-full flex items-center justify-center shadow-md border border-blue-500 transition ease-in-out duration-500 focus:ring-1 focus:ring-indigo-500 focus:ring-offset-2 before:outline-offset-1 bg-indigo-700 text-white hover:bg-indigo-400 hover:ring-indigo-300 border-1 rounded-md py-2">

                <span class="text-[16px] font-medium font-sans dark:text-white">
                    Sign up with google
                </span>
        </button>

        <div>
            {{ $slot }}
        </div>
    </div>
</div>
</body>
</html>
