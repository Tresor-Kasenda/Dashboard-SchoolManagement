<header class="shadow-sm group bg-white">
    <div class="py-5 px-4 flex relative max-w-6xl mx-auto items-center justify-between">
        <a href="{{ route('home') }}"
           class="text-3xl sm:text-4xl max-sm:text-3xl font-bold text-gray-700 font-sans cursor-pointer first-letter:text-pink-600 hover:text-gray-500">
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
                <a href="{{ route('login') }}"
                   class="px-4 py-3 bg-pink-500 text-white hover:bg-pink-600 rounded-full font-medium before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                    Try it now
                </a>
            </li>
        </ul>
    </div>
</header>
