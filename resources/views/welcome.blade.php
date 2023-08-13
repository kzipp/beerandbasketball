<x-app-layout>

    {{-- bump down listen on. Remove nav menu on mobile, should just always be the same --}}


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
        <div
            class="w-full px-4 mx-auto bg-gray-2 bg-opacity-80 border-b pb-12 border-gray-700 md:items-center md:justify-between md:flex-row md:px-6 lg:px-32">
            <div class="flex w-full pt-12 text-center md:text-left">
                <h2 class="mb-1 text-xs ml-1 font-semibold tracking-widest text-white uppercase title-font">Latest
                    Episodes</h2>
            </div>
            <div class="flex flex-wrap ">
                @foreach ($episodes as $episode)
                    <div class="w-full md:pr-5 md:w-1/2 lg:w-1/3">
                        <div class="relative flex flex-col h-full ">
                            <div
                                class="items-end w-full mt-4 text-left text-gray-200 p-4 rounded-lg shadow-lg border-gray-700 border h-full">

                                <h2
                                    class="mb-2 font-serif text-xl font-semibold text-white lg:text-2xl h-auto min-h-16">
                                    EP.{{ str_pad($totalEpisodes - $loop->index, 2, '0', STR_PAD_LEFT) }}
                                    – {{ $episode['title'] }}</h2>
                                <strong
                                    class="text-xs font-bold leading-relaxed tracking-widest uppercase">{{ Carbon\Carbon::parse($episode['published_date'])->format('F j, Y') }}</strong>
                                <p class="mt-4 text-sm tracking-wide">{{ $episode['description'] }}</p>
                                <div class="flex justify-end mt-3">
                                    <a href="/coming-soon"
                                        class="inline-flex items-center py-4 text-xs font-bold tracking-widest text-white uppercase transition duration-500 ease-in-out transform hover:text-gray-300">
                                        Listen Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                            viewBox="0 0 24 24">
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



</x-app-layout>
