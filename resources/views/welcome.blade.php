<x-app-base>
    <section class="relative items-center px-4 py-20 max-sm:py-14 max-sm:leading-10">
        <div
            class="max-w-4xl mx-auto text-center max-w-xs:text-center sm:text-center md:text-center space-y-10 max-sm:space-y-5">
            <h1 class="text-6xl max-sm:text-4xl  font-bold font-sans text-gray-700 leading-tight">
                Used the world's <br class="hidden sm:inline-block">
                <span
                    class="before:block before:absolute before:-inset-1 before:-skew-x-3 before:bg-pink-500 relative inline-block">
                <span class="relative text-white">innovative</span>
                </span>
                businesses
            </h1>
            <p class="font-sans text-slate-500 text-lg font-medium leading-8 text-center justify-around">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                nesciunt
            </p>

            <div class="flex items-center justify-center gap-6">
                <a href="{{ route('register') }}"
                   class="relative flex bg-pink-500 py-2 font-medium rounded-full h-9 items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                    <span class="leading-none relative text-base tracking-wider text-white"> Try it now</span>
                </a>
                <a href="#" class="group flex items-center gap-1 tracking-wide text-pink-500">
                <span
                    class="relative text-base tracking-wider font-medium duration-300 group-hover:tracking-wider">Learn more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="w-6 h-6 translate-y-px duration-300 group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/>
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
            <h2 class="text-gray-700 text-center text-4xl max-sm:text-3xl sm:text-6xl md:text-5xl lg:text-7xl">Choose
                Your
                Plan</h2>
            <p class="text-center max-sm:text-[16px] sm:text-[16px] text-2xl py-5 max-sm:py-3 text-slate-500">
                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
                and
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
</x-app-base>
