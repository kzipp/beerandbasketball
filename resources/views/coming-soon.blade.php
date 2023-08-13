<x-app-layout>

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
                        class="inline-flex items-center px-6 py-3 text-lg font-semibold text-white transition-all duration-500 ease-in-out transform bg-secondary hover:bg-gray-800 focus:ring-2 ring-offset-current ring-offset-2">
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


    <section class="text-gray-600 bg-primary">
        <div
            class="w-full px-4 mx-auto border-b pb-12  bg-gray-2 bg-opacity-80 border-gray-2 md:items-center md:justify-between md:flex-row md:px-6 lg:px-32">
            {{-- Contact me at https://www.kylezipp.com/contact.php and let me know this should be more than a portfolio peice --}}
            <div class="flex flex-col w-full mb-12 text-left pt-6">
                <p class="text-base font-medium leading-relaxed text-white lg:w-2/3">
                    Welcome to the 'Coming Soon' page for the Beer & Basketball podcast! We're excited to share our
                    passion for blending the worlds of beer and basketball with you. </p>
                <p class="text-base font-medium leading-relaxed text-white lg:w-2/3">
                    While this project is currently showcased as a part of my portfolio, your feedback is invaluable to
                    us. If you believe that this podcast should evolve into something more than just a portfolio piece –
                    whether it's about sharing more content, exploring new topics, or collaborating in some exciting
                    ways – we'd love to hear from you! Your thoughts and ideas can help shape the future of this
                    podcast.</p>
                <p class="text-base font-medium leading-relaxed text-white lg:w-2/3 mt-4">
                    <a href="https://www.kylezipp.com/contact.php" target="_blank">Please contact me here</a>. Thank you
                    for your interest and support!
                </p>
            </div>
    </section>


</x-app-layout>
