<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">
<nav
    class="px-24 py-4 relative items-center bg-gradient-to-br from-gray-100 to-slate-100 justify-between sm:flex selection:text-white hover:shadow-amber-50">
    <h1>
        <a href="#"
           class="text-4xl font-medium text-gray-900 hover:cursor-pointer hover:transition hover:ease-out hover:duration-200 pt-4 first-letter:text-bold first-letter:text-indigo-600 dark:text-gray-400 dark:hover:text-white">kasenda</a>
    </h1>

    <ul class="flex items-center space-x-6">
        <li>
            <a href="#"
               class="text-black px-5 py-3 hover:font-semibold hover:transition hover:ease-in-out hover:duration-100 rounded-lg font-medium dark:hover:text-white">Post
                a Job</a>
        </li>
        <li>
            <a href="#"
               class="bg-gray-600 text-white px-5 py-3 hover:font-semibold hover:transition hover:ease-in-out hover:duration-100 rounded-xl font-medium dark:hover:text-white hover:ring-2 hover:border-gray-400">Hire
                me</a>
        </li>
    </ul>
</nav>

<section class="bg-slate-100 pt-10">
    <div class="max-w-5xl w-full mx-auto px-4 py-2 lg:px-4 lg:py-4">
        <h1 class="text-5xl font-bold text-gray-900 dark:text-white text-center justify-center">
            We're committed to bringing world-class, passionate <span class="text-rose-400">professionals</span>
            together to
            push new bundaries
            and grow
        </h1>

        <p class="text-2xl font-medium py-10 leading-1 text-center justify-center">
            We're a community of passionate developers, designers, and creators. We're committed to bringing
            world-class,
            passionate professionals together to push new bundaries and grow.
        </p>

        <ul class="flex flex-row justify-between">
            <li>
                <a href="#"
                   class="text-lg hover:bg-gray-800 hover:text-white px-3 py-2 rounded-lg hover:shadow-sm transition hover:ease-in-out hover:duration-300">View
                    all</a>
            </li>
            <li>
                <a href="#"
                   class="text-lg hover:bg-gray-800 hover:text-white px-3 py-2 rounded-lg hover:shadow-sm transition hover:ease-in-out hover:duration-300">Desing</a>
            </li>
            <li>
                <a href="#"
                   class="text-lg hover:bg-gray-800 hover:text-white px-3 py-2 rounded-lg hover:shadow-sm transition hover:ease-in-out hover:duration-300">Software
                    Engineering</a>
            </li>
            <li>
                <a href="#"
                   class="text-lg hover:bg-gray-800 hover:text-white px-3 py-2 rounded-lg hover:shadow-sm transition hover:ease-in-out hover:duration-300">Customer
                    Succes</a>
            </li>
            <li>
                <a href="#"
                   class="text-lg hover:bg-gray-800 hover:text-white px-3 py-2 rounded-lg hover:shadow-sm transition hover:ease-in-out hover:duration-300">Sales</a>
            </li>
            <li>
                <a href="#"
                   class="text-lg hover:bg-gray-800 hover:text-white px-3 py-2 rounded-lg hover:shadow-sm transition hover:ease-in-out hover:duration-300">Marketing</a>
            </li>
        </ul>

        <div class="py-6">
            <div
                class="bg-white rounded-lg shadow-md ring-1 hover:ring-1 hover:ring-blue-200 hover:transition hover:ease-in hover:duration-200 border-none px-6 py-4 border-2">
                <div class="flex flex-row justify-between items-center">
                    <span class="text-md font-medium text-gray-800">Design</span>
                    <a href="#"
                       class="font-medium text-md text-gray-800 flex justify-between items-center hover:transition hover:ease-out">
                        <span>View job</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 ml-3 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                        </svg>
                    </a>
                </div>
                <div class="py-2">
                    <a class="text-2xl font-bold text-gray-800 items-start py-4" href="#">Senior Product Designer</a>
                </div>

                <div class="flex flex-row gap-6 items-center pb-3 pt-2">
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>

                        <span class="text-sm font-medium text-gray-800">Remote</span>
                    </div>
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-800">Full-time</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-2">
            <div
                class="bg-white rounded-lg shadow-md ring-1 hover:ring-1 hover:ring-blue-200 hover:transition hover:ease-in hover:duration-200 border-none px-6 py-4 border-2">
                <div class="flex flex-row justify-between items-center">
                    <span class="text-md font-medium text-gray-800">Software Development</span>
                    <a href="#"
                       class="font-medium text-md text-gray-800 flex justify-between items-center hover:transition hover:ease-out">
                        <span>View job</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 ml-3 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                        </svg>
                    </a>
                </div>
                <div class="py-2">
                    <a class="text-2xl font-bold text-gray-800 items-start py-4" href="#">Engineering Manager</a>
                </div>

                <div class="flex flex-row gap-6 items-center pb-3 pt-2">
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>

                        <span class="text-sm font-medium text-gray-800">Remote</span>
                    </div>
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-800">Full-time</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4">
            <div
                class="bg-white rounded-lg shadow-md ring-1 hover:ring-1 hover:ring-blue-200 hover:transition hover:ease-in hover:duration-200 border-none px-6 py-4 border-2">
                <div class="flex flex-row justify-between items-center">
                    <span class="text-md font-medium text-gray-800">Customer Success</span>
                    <a href="#"
                       class="font-medium text-md text-gray-800 flex justify-between items-center hover:transition hover:ease-out">
                        <span>View job</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 ml-3 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                        </svg>
                    </a>
                </div>
                <div class="py-2">
                    <a class="text-2xl font-bold text-gray-800 items-start py-4" href="#">Customer Success Manager</a>
                </div>

                <div class="flex flex-row gap-6 items-center pb-3 pt-2">
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>

                        <span class="text-sm font-medium text-gray-800">Remote</span>
                    </div>
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-800">Full-time</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4">
            <div
                class="bg-white rounded-lg shadow-md ring-1 hover:ring-1 hover:ring-blue-200 hover:transition hover:ease-in hover:duration-200 border-none px-6 py-4 border-2">
                <div class="flex flex-row justify-between items-center">
                    <span class="text-md font-medium text-gray-800">Sales</span>
                    <a href="#"
                       class="font-medium text-md text-gray-800 flex justify-between items-center hover:transition hover:ease-out">
                        <span>View job</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 ml-3 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                        </svg>
                    </a>
                </div>
                <div class="py-2">
                    <a class="text-2xl font-bold text-gray-800 items-start py-4" href="#">Account Executive</a>
                </div>

                <div class="flex flex-row gap-6 items-center pb-3 pt-2">
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>

                        <span class="text-sm font-medium text-gray-800">Remote</span>
                    </div>
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-800">Full-time</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4">
            <div
                class="bg-white rounded-lg shadow-md ring-1 hover:ring-1 hover:ring-blue-200 hover:transition hover:ease-in hover:duration-200 border-none px-6 py-4 border-2">
                <div class="flex flex-row justify-between items-center">
                    <span class="text-md font-medium text-gray-800">Marketing</span>
                    <a href="#"
                       class="font-medium text-md text-gray-800 flex justify-between items-center hover:transition hover:ease-out">
                        <span>View job</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 ml-3 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                        </svg>
                    </a>
                </div>
                <div class="py-2">
                    <a class="text-2xl font-bold text-gray-800 items-start py-4" href="#">SEO Marketing Manager</a>
                </div>

                <div class="flex flex-row gap-6 items-center pb-3 pt-2">
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>

                        <span class="text-sm font-medium text-gray-800">Remote</span>
                    </div>
                    <div class="items-center flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 text-gray-800 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-800">Full-time</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<footer class="bg-white">
    <div class="max-w-5xl mx-auto py-10 items-center text-center justify-center">
        <h1 class="text-xl font-medium text-slate-500">Trusted by leading Software worldwide</h1>

        <ul class="flex flex-row gap-4 justify-center text-center mt-8">
            <li class="text-slate-500 font-light text-md">Job</li>
            <li class="text-slate-500 font-light text-md">Consultants</li>
            <li class="text-slate-500 font-light text-md">Contact</li>
            <li class="text-slate-500 font-light text-md">Twitter</li>
        </ul>
    </div>
    <hr class="text-gray-700">
    <div class="max-w-7xl mx-auto py-6">
        <div class="flex justify-between items-center px-6">
            <a href="#" class="text-sm text-indigo-950  hover:underline hover:underline-offset-8 capitalize">Created by
                Tresor
                Kasenda</a>

            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-5 h-5 text-sm text-indigo-950">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"/>
                </svg>
            </a>
        </div>
    </div>
</footer>

</body>
</html>
