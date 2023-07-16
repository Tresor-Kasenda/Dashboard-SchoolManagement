<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 font-sans">
<nav class="max-w-6xl mx-auto flex justify-between items-center relative py-6">
    <div class="flex flex-row items-center space-x-8">
        <div class="flex flex-row items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-8 h-8 text-teal-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
            </svg>
            <h1 class="text-2xl font-bold text-gray-800">Vinco</h1>
        </div>
    </div>
    <div class="flex flex-row items-center space-x-4">
        <a href="#" class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out">Home</a>
        <a href="#" class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out">About</a>
        <a href="#" class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out">Contact</a>
    </div>
    <div class="flex flex-row items-center space-x-4">
        <a href="#" class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out">Login</a>
        <a href="#"
           class="px-5 py-3 font-medium bg-teal-500 border border-slate-100 text-white rounded-full hover:bg-teal-700 hover:text-white dark:hover:text-white transition duration-700 ease-in-out hover:right-2">
            Register
        </a>
    </div>
</nav>

<section class="max-w-6xl mx-auto flex justify-between items-center relative pb-3">
    <div
        class="absolute -top-32 -left-64 w-72 h-72 rounded-full mix-blend-multiply filter blur-xl opacity-50 bg-purple-300 animate-blob"></div>
    <div
        class="absolute bottom-10 left-2/3 w-72 h-72 rounded-full mix-blend-multiply filter blur-xl  opacity-40 bg-pink-300 animate-blob"></div>
    <div class="text-left py-12 flex-row w-2/2">
        <h1 class="text-5xl font-bold font-sans text-gray-700">
            Used the world's <span class="text-blue-600">innovative</span> businesses to create best digital <span
                class="text-teal-600">products</span>
            experiences.
        </h1>

        <p class="py-10 font-sans text-gray-700 font-medium shrink leading-8 text-left">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda beatae deleniti expedita iste nesciunt
            non odio odit officiis soluta vel! Ab dolor eligendi ex expedita harum ipsum tempore ullam, voluptatum?
        </p>

        <div class="flex justify-start items-center space-x-8 py-6">
            <a href="#"
               class="px-5 py-3 font-medium bg-blue-500 outline-offset-1 text-white rounded-full hover:bg-blue-700 hover:text-white dark:hover:text-white transition ease-in duration-500 hover:right-2">
                Try it now
            </a>
            <a href="#"
               class="font-sans font-medium bg-teal-200 px-4 py-3 rounded-full text-gray-700 hover:bg-teal-600 hover:text-white transition  ease-in-out duration-500 hover:shadow">
                Explore more
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-5 h-5 hover:text-white inline-block ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="space-x-8 w-full">
        <img src="{{ asset('images/h.png') }}" alt="" class="w-full object-cover h-3/5 hover:shadow-sm">
    </div>
</section>

<section class="bg-white py-6 relative">
    <div class="max-w-6xl mx-auto py-4 text-left">
        <h1 class="text-4xl font-semibold text-gray-800 w-1/3 leading-10">
            We provide various kind of service for you
        </h1>
        <div class="flex flex-row items-center justify-between py-6 text-left space-x-8">
            <div class="text-left py-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-16 h-16 text-teal-400 shadow rounded-full hover:rounded-full hover:bg-teal-500 hover:text-white px-2 py-2 transition ease-in-out duration-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>
                </svg>

                <h2 class="font-medium text-2xl text-gray-700 py-4">Advanced Statistics</h2>
                <p class="text-md font-sans mt-3">
                    But I must explain to you how all this mistaken <br> idea of denouncing pleasure.
                </p>
            </div>
            <div class="text-left py-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-16 h-16 text-teal-400 shadow rounded-full hover:rounded-full hover:bg-teal-500 hover:text-white px-2 py-2 transition ease-in-out duration-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"/>
                </svg>

                <h2 class="font-medium text-2xl text-gray-700 py-4">Powerfull Admin</h2>
                <p class="text-md font-sans mt-3">
                    But I must explain to you how all this mistaken <br> idea of denouncing pleasure.
                </p>
            </div>
            <div class="text-left py-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-16 h-16 text-teal-400 shadow rounded-full hover:rounded-full hover:bg-teal-500 hover:text-white px-2 py-2 transition ease-in-out duration-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
                <h2 class="font-medium text-2xl text-gray-700 py-4">Security Updates</h2>
                <p class="text-md font-sans mt-3">
                    But I must explain to you how all this mistaken <br> idea of denouncing pleasure.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-6 bg-gray-100 relative">
    <div class="max-w-6xl mx-auto py-4 flex flex-row justify-between">
        <div class="relative ml-4">
            <div
                class="absolute bottom-10 -left-1 w-72 h-72 rounded-full mix-blend-multiply filter blur-xl  opacity-20 bg-pink-300 animate-blob"></div>
            <img src="{{ asset('images/g.png') }}"
                 class="w-2/4 object-cover hover:shadow hover:bg-slate-200 transition ease-in duration-500" alt="">
        </div>
        <div class="">

        </div>
    </div>
</section>

<!--generate 4 cards with different prince-->
<section class="py-6 relative">

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
                    <svg class="w-4 h-4 text-gray-600 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                              d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="py-2 px-4 text-gray-500 hover:text-gray-400">
                    <svg class="w-4 h-4 text-gray-600 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd"
                              d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="py-2 px-4 text-gray-500 hover:text-gray-400">
                    <svg class="w-4 h-4 text-gray-600 dark:text-white" aria-hidden="true"
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
