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
<nav class="py-12"></nav>
<div class="max-w-6xl mx-auto flex justify-between items-center relative pb-3">
    <div
            class="absolute -top-32 -left-64 w-72 h-72 rounded-full mix-blend-multiply filter blur-xl opacity-50 bg-purple-300 animate-blob"></div>
    <div
            class="absolute bottom-10 left-full w-72 h-72 rounded-full mix-blend-multiply filter blur-xl  opacity-40 bg-pink-300 animate-blob"></div>

    <div class="text-left py-12 flex-row w-2/2">
        <h1 class="text-5xl font-bold font-sans text-gray-700">
            Used the world's innovative businesses to create best digital <span
                    class="text-teal-600">products</span>
            experiences.
        </h1>

        <p class="py-10 font-sans text-gray-700 font-medium shrink leading-8 text-left">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda beatae deleniti expedita iste nesciunt
            non odio odit officiis soluta vel! Ab dolor eligendi ex expedita harum ipsum tempore ullam, voluptatum?
        </p>

        <div class="flex justify-start items-center space-x-8 py-6">
            <a href="#"
               class="px-4 py-3 font-medium bg-teal-500 border border-slate-100 text-white rounded-full hover:bg-teal-700 hover:text-white dark:hover:text-white transition duration-700 ease-in-out hover:right-2">
                Try it now
            </a>
            <a href="#"
               class="font-sans font-medium bg-teal-200 px-4 py-3 rounded-full text-gray-700 hover:bg-teal-600 hover:text-white transition duration-300 ease-in-out hover:shadow">
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
</div>

<section class="bg-white py-6 relative">
    <div class="max-w-6xl mx-auto py-4 text-left">
        <h1 class="text-4xl font-semibold text-gray-800 w-1/3 leading-10">
            We provide various kind of service for you
        </h1>
        <div class="flex flex-row items-center justify-between py-6 text-left space-x-8">
            <div class="text-left py-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-16 h-16 text-teal-400 shadow rounded-full hover:rounded-full hover:bg-teal-500 hover:text-white px-2 py-2 transition ease-in-out duration-200">
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
                     class="w-16 h-16 text-teal-400 shadow rounded-full hover:rounded-full hover:bg-teal-500 hover:text-white px-2 py-2 transition ease-in-out duration-200">
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
                     class="w-16 h-16 text-teal-400 shadow rounded-full hover:rounded-full hover:bg-teal-500 hover:text-white px-2 py-2 transition ease-in-out duration-200">
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
</body>
</html>
