<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800;900&display=swap"
        rel="stylesheet" />

    {{-- favicon /images/favicon.ico --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-80YC8PZ5LD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-80YC8PZ5LD');
    </script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="font-sans antialiased">

    <div class="w-full text-gray-400 bg-primary ">
        <div x-data="{ open: false }"
            class="flex w-full mx-auto border-b  bg-gray-2 bg-opacity-80 border-gray-700 items-center justify-between flex-row lg:px-32">
            <div class="flex flex-row items-center justify-between p-4 pr-0">
                <a href="./" class="text-lg font-semibold focus:outline-none focus:shadow-outline">
                    <div
                        class="text-lg font-semibold tracking-widest rounded-lg focus:outline-none focus:shadow-outline">
                        <div class="inline-flex items-center ">
                            🏀
                            <strong
                                class="text-lg font-bold tracking-tighter text-white transition duration-500 ease-in-out transform tracking-relaxed ">
                                Beer &&&& Basketball
                            </strong>
                        </div>
                    </div>
                </a>

            </div>



            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" aria-haspopup="list"
                    class="flex flex-row items-center px-4 py-2 text-xs font-semibold tracking-widest text-left text-white uppercase tracking w-auto mt-0 ml-4 hover:text-gray-500 focus:outline-none focus:shadow-outline ">
                    <span>Listen On</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div role="list" x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full mt-2 origin-top-right bg-primary border shadow-2xl  border-gray-700 md:w-48">
                    <div class="z-10 bg-primary relative border shadow-2xl  border-gray-700 md:w-48 ">
                        <ul class="divide-y-2">
                            <li>
                                <a class="block px-5 py-3 text-xs font-semibold tracking-widest uppercase transition duration-500 ease-in-out transform bg-transparent hover:text-gray-400 focus:outline-none focus:shadow-outline"
                                    href="/coming-soon">Spotify</a>
                            </li>
                            <li>
                                <a class="block px-5 py-3 text-xs font-semibold tracking-widest uppercase transition duration-500 ease-in-out transform bg-transparent hover:text-gray-400 focus:outline-none focus:shadow-outline"
                                    href="/coming-soon">Google Podcasts</a>
                            </li>
                            <li>
                                <a class="block px-5 py-3 text-xs font-semibold tracking-widest uppercase transition duration-500 ease-in-out transform bg-transparent hover:text-gray-400 focus:outline-none focus:shadow-outline"
                                    href="/coming-soon">Apple Podcasts</a>
                            </li>
                            <li>
                                <a class="block px-5 py-3 text-xs font-semibold tracking-widest uppercase transition duration-500 ease-in-out transform bg-transparent hover:text-gray-400 focus:outline-none focus:shadow-outline"
                                    href="/coming-soon">
                                    Soundcloud</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <footer class="text-blueGray-600 body-font bg-primary">
        <div
            class="flex flex-col w-full px justify-center-4 py-4 mx-auto  bg-gray-2 bg-opacity-80 border-gray-2 md:items-center md:justify-between md:flex-row md:px-6 lg:px-32">

            <div
                class="text-lg font-semibold tracking-widest rounded-lg focus:outline-none focus:shadow-outline text-center">
                <div class="inline-flex items-center">
                    🏀
                    <strong
                        class="text-lg font-bold tracking-tighter text-white transition duration-500 ease-in-out transform tracking-relaxed ">
                        Beer & Basketball
                    </strong>
                </div>
            </div>
            <p
                class="mt-4 text-sm text-white sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-blueGray-200 sm:py-2 sm:mt-0 text-center">
                © {{ date('Y') }}
                <a href="https://www.kylezipp.com" class="ml-1 text-blueGray-600 hover:text-blue-500"
                    rel="noopener noreferrer" target="_blank">Kyle Zipp</a>
            </p>

            <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
                <a class="text-white">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-white">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-white">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-white">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>

        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
