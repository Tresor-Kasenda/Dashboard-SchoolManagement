@props([
    'title' => ''
])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') ?? $title }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased overflow-x-hidden dark:text-white bg-slate-50">

<nav class="shadow-sm group bg-white">
    <div class="py-5 px-4 flex relative max-w-6xl mx-auto items-center justify-between">
        <a href="{{ route('home') }}"
           class="text-3xl sm:text-4xl max-sm:text-3xl font-bold text-gray-700 font-sans cursor-pointer first-letter:text-indigo-600 hover:text-gray-500">
            vinco
        </a>

        <ul class="space-x-4 items-center lg:flex text-sm max-sm:hidden sm:hidden md:block">
            <li>
                <a href="#"
                   class="text-gray-700 font-medium text-base hover:text-indigo-600 transition duration-300 ease-out">
                    Home
                </a>
            </li>
            <li>
                <a href="#"
                   class="text-gray-700 font-medium text-base hover:text-indigo-600 transition duration-300 ease-out">
                    About
                </a>
            </li>
            <li>
                <a href="#"
                   class="px-4 py-3 focus:outline-none focus-visible:ring bg-indigo-600 hover:bg-indigo-700 font-[400px] text-base font-sans rounded-full text-white">
                    Try it now
                </a>
            </li>
        </ul>
    </div>
</nav>

<section class="relative max-w-6xl mx-auto flex justify-between items-center px-4 py-10 max-sm:py-14 max-sm:leading-10">
    <div
        class="max-w-4xl mx-auto text-center max-w-xs:text-center sm:text-center md:text-center space-y-10 max-sm:space-y-5">
        <h1 class="text-5xl max-sm:text-4xl  font-bold font-sans text-gray-700 leading-tight">
            Used the world's <br class="hidden sm:inline-block">
            <span
                class="before:block before:absolute before:-inset-1 before:-skew-x-3 before:bg-pink-500 relative inline-block">
                <span class="relative text-white">innovative</span>
                </span>
            businesses
        </h1>
        <p class="font-sans text-slate-500 text-base font-medium leading-8 text-center justify-around">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            nesciunt
        </p>

        <div class="flex items-center justify-center gap-6">
            <a href="{{ route('register') }}"
               class="relative flex bg-pink-500 rounded-full h-9 items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                <span class="leading-none relative text-base tracking-wider text-white"> Try it now</span>
            </a>
            <a href="#" class="group flex items-center gap-1 tracking-wide text-pink-500">
                <span
                    class="relative text-base tracking-wider font-medium duration-300 group-hover:tracking-wider">Learn more</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-6 h-6 translate-y-px duration-300 group-hover:translate-x-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/>
                </svg>

            </a>
        </div>
    </div>
</section>

<section class="py-10">
    <ul class="max-w-6xl mx-auto sm:overflow-x-auto flex items-center justify-center space-x-10">
        <li>
            <img src="{{ asset('images/brand-b.png') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('images/brand-a.png') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('images/brand-f.png') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('images/brand-a.png') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('images/brand-b.png') }}" alt="">
        </li>
    </ul>
</section>

<section class="p-6 space-y-5 max-sm:space-y-3 max-sm:p-3 max-sm:py-3">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-gray-700 text-center text-4xl max-sm:text-3xl sm:text-6xl md:text-5xl lg:text-7xl">Choose Your
            Plan</h2>
        <p class="text-center max-sm:text-[16px] sm:text-[16px] text-2xl py-5 max-sm:py-3 text-slate-500">
            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and
            I will give you a complete account of the system, the master-builder of human happiness.
        </p>
    </div>
    <div
        class="max-w-5xl mx-auto p-6 grid grid-cols-1 max-sm:grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 md:gap-6 lg:grid-cols-3 lg:gap-6">
        <div
            class="relative shadow bg-white max-sm:col-end-2 px-10 border rounded-md text-left ring-1 hover:border-green-500">
            <h2 class="text-3xl max-sm:text-2xl font-medium font-sans text-gray-700 pt-4">Basic</h2>
            <div class="py-5">
                <span class="text-4xl max-sm:text-2xl text-gray-600 font-bold">$</span>
                <span class="text-4xl max-sm:text-2xl text-gray-600 font-bold">40</span>
                <span class="text-gray-500">/mo</span>
            </div>
            <div class="py-7 max-sm:py-4">
                <ul class="marker:text-sky-400 list-disc pl-4 space-y-2 text-black">
                    <li class="font-gray-600 text-sm font-medium">LMS access</li>
                    <li class="font-gray-600 text-sm font-medium">Maintenance</li>
                    <li class="font-gray-600 text-sm font-medium">10 GB Bandwidth</li>
                </ul>
            </div>
            <div class="py-4 text-center">
                <button
                    class="border relative w-full border-green-500 text-black font-semibold py-2 px-4 rounded-md hover:border-none transition ease-out duration-500 hover:bg-green-700 dark:hover:text-white hover:text-white">
                    Get Started
                </button>
            </div>
        </div>

    </div>
</section>

<footer>
    <div class="bg-white">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-500">Vinco</a>
            <p class="py-2 text-gray-500 text-sm text-center sm:text-left">
                © 2020 All rights reserved
            </p>
            <div class="flex">
                <a href="#" class="py-2 px-4 text-gray-500 hover:text-gray-400">
                    <svg class="w-4 h-4 text-gray-600 dark:text-white hover:text-indigo-600" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                              d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="py-2 px-4 text-gray-500 hover:text-gray-400">
                    <svg class="w-4 h-4 text-gray-600 dark:text-white hover:text-indigo-600"
                         aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd"
                              d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="py-2 px-4 text-gray-500 hover:text-gray-400">
                    <svg class="w-4 h-4 text-gray-600 dark:text-white hover:text-indigo-600" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                        <path fill-rule="evenodd"
                              d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                              clip-rule="evenodd"/>
                        <path d="M3 5.012H0V15h3V5.012Z"/>
                    </svg>

                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
