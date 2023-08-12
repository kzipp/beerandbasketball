<x-app-layout>

    {{-- bump down listen on. Remove nav menu on mobile, should just always be the same --}}

    <div class="w-full text-gray-400 bg-primary ">
        <div x-data="{ open: false }"
            class="flex w-full mx-auto border-b  bg-gray-2 bg-opacity-80 border-gray-700 items-center justify-between flex-row px-6 lg:px-32">
            <div class="flex flex-row items-center justify-between p-4 pr-0">
                <a href="./" class="text-lg font-semibold focus:outline-none focus:shadow-outline">
                    <div
                        class="text-lg font-semibold tracking-widest rounded-lg focus:outline-none focus:shadow-outline">
                        <div class="inline-flex items-center">
                            🏀
                            <strong
                                class="text-lg font-bold tracking-tighter text-white transition duration-500 ease-in-out transform tracking-relaxed ">
                                Beer & Basketball
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
    <section class="relative bg-primary bg-cover bg-center py-32"
        style="background-image: url('/images/background.png');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="container flex flex-wrap items-center justify-center px-5 mx-auto relative">
            <div class="w-4/5 mx-auto text-center">
                <h1 x-data="{ showText: true }" class="mb-6">
                    <span x-show="showText" class="font-serif font-bold text-3xl text-secondary lg:text-5xl z-10"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Exploring the Fusion of Beer &
                        Basketball</span>
                </h1>
                <p>
                    <span x-show="showText" class="mb-6 text-white text-lg lg:text-xl z-10" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="300">Dive into the captivating realms of both brews and
                        hoops with Beer & Basketball. Join us on an exciting journey as we merge these two passions into
                        an unparalleled experience.</span>
                </p>
                <div class="flex justify-center mt-8">
                    <a href="#"
                        class="inline-flex items-center px-6 py-3 text-lg font-semibold rounded text-white transition-all duration-500 ease-in-out transform bg-secondary hover:bg-gray-800 focus:ring-2 ring-offset-current ring-offset-2">
                        Listen Now
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

  

    <section class="text-gray-600 bg-primary" id="episodes">
        <div class="w-full px-4 mx-auto bg-gray-2 bg-opacity-80 border-b pb-12 border-gray-700 md:items-center md:justify-between md:flex-row md:px-6 lg:px-32">
            <div class="flex w-full pt-12 text-center md:text-left">
                <h2 class="mb-1 text-xs ml-1 font-semibold tracking-widest text-white uppercase title-font">Latest Episodes</h2>
            </div>
            <div class="flex flex-wrap ">
                @foreach ($episodes as $episode)
                    <div class="w-full md:pr-5 md:w-1/2 lg:w-1/3">
                            <div class="relative flex flex-col h-full ">
                            <div class="items-end w-full mt-4 text-left text-gray-200 p-4 rounded-lg shadow-lg border-gray-700 border h-full">
                                
                                <h2 class="mb-2 font-serif text-xl font-semibold text-white lg:text-2xl h-auto min-h-16">EP.{{ str_pad($totalEpisodes - $loop->index, 2, '0', STR_PAD_LEFT) }}
                                     – {{ $episode['title'] }}</h2>
                                <strong class="text-xs font-bold leading-relaxed tracking-widest uppercase">{{ Carbon\Carbon::parse($episode['published_date'])->format('F j, Y') }}</strong>
                                <p class="mt-4 text-sm tracking-wide">{{ $episode['description'] }}</p>
                                <div class="flex justify-end mt-3">
                                    <a href="/coming-soon" class="inline-flex items-center py-4 text-xs font-bold tracking-widest text-white uppercase transition duration-500 ease-in-out transform hover:text-gray-300">
                                        Listen Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    

    <footer class="text-blueGray-600 body-font bg-primary">
        <div
            class="flex flex-col w-full px-4 py-4 mx-auto  bg-gray-2 bg-opacity-80 border-gray-700 md:items-center md:justify-between md:flex-row md:px-6 lg:px-32">

            <div class="text-lg font-semibold tracking-widest rounded-lg focus:outline-none focus:shadow-outline">
                <div class="inline-flex items-center">
                    🏀
                    <strong
                        class="text-lg font-bold tracking-tighter text-white transition duration-500 ease-in-out transform tracking-relaxed ">
                        Beer & Basketball
                    </strong>
                </div>
            </div>
            <p class="mt-4 text-sm text-white sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-blueGray-200 sm:py-2 sm:mt-0">
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
                        <rect width="20" height="20" x="2" y="2" rx="5"
                            ry="5"></rect>
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
</x-app-layout>
