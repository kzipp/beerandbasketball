<x-app-layout>
    <div class="w-full text-gray-400 bg-primary ">
        <div x-data="{ open: false }"
            class="flex flex-col w-full px-4 mx-auto border-b  bg-gray-2 bg-opacity-80 border-gray-2 md:items-center md:justify-between md:flex-row md:px-6 lg:px-32">
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
                <button class="md:hidden focus:outline-none" @click="open = !open" aria-label="hidden">
                    <svg fill="#000000" viewBox="0 0 20 20" class="w-12 h-12">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" style="display: none"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col items-center flex-grow hidden px-5 py-2 pl-0 pt-0 md:pb-0 md:flex md:justify-end md:flex-row">
               


                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" aria-haspopup="list"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-xs font-semibold tracking-widest text-left text-white uppercase tracking md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-500 focus:outline-none focus:shadow-outline ">
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
                        class="absolute right-0 w-full mt-2 origin-top-right bg-primary border shadow-2xl  border-white md:w-48">
                        <div class="z-10 bg-primary relative border shadow-2xl  border-white md:w-48 ">
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
            </nav>
        </div>
    </div>
    <section class="relative bg-primary bg-cover bg-center py-32" style="background-image: url('/images/background.png');">
      <div class="absolute inset-0 bg-black opacity-60"></div>
      <div class="container flex flex-wrap items-center justify-center px-5 mx-auto relative">
          <div class="w-4/5 mx-auto text-center">
              <h1 x-data="{ showText: true }" class="mb-6">
                  <span x-show="showText" class="font-serif font-bold text-3xl text-secondary lg:text-5xl z-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Exploring the Fusion of Beer & Basketball</span>
              </h1>
              <p>
                  <span x-show="showText" class="mb-6 text-white text-lg lg:text-xl z-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Dive into the captivating realms of both brews and hoops with Beer & Basketball. Join us on an exciting journey as we merge these two passions into an unparalleled experience.</span>
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
      <div class="w-full px-4 mx-auto border-b pb-12  bg-gray-2 bg-opacity-80 border-gray-2 md:items-center md:justify-between md:flex-row md:px-6 lg:px-32">
        {{-- Contact me at https://www.kylezipp.com/contact.php and let me know this should be more than a portfolio peice --}}
        <div class="flex flex-col w-full mb-12 text-left pt-6">
          <p class="text-base font-medium leading-relaxed text-white lg:w-2/3">
            Welcome to the 'Coming Soon' page for the Beer & Basketball podcast! We're excited to share our passion for blending the worlds of beer and basketball with you. </p>
            <p class="text-base font-medium leading-relaxed text-white lg:w-2/3">
            While this project is currently showcased as a part of my portfolio, your feedback is invaluable to us. If you believe that this podcast should evolve into something more than just a portfolio piece – whether it's about sharing more content, exploring new topics, or collaborating in some exciting ways – we'd love to hear from you! Your thoughts and ideas can help shape the future of this podcast.</p>
            <p class="text-base font-medium leading-relaxed text-white lg:w-2/3 mt-4">
                <a href="https://www.kylezipp.com/contact.php" target="_blank">Please contact me here</a>. Thank you for your interest and support!
          </p>
      </div>
  </section>
  
    <footer class="text-blueGray-600 body-font bg-primary">
      <div class="flex flex-col w-full px-4 py-4 mx-auto  bg-gray-2 bg-opacity-80 border-gray-2 md:items-center md:justify-between md:flex-row md:px-6 lg:px-32">
            <a href="https://www.wickedtemplates.com/"
                class="flex items-center justify-center font-medium text-blueGray-900 title-font md:justify-start">
                <div class="text-lg font-semibold tracking-widest rounded-lg focus:outline-none focus:shadow-outline">
                    <div class="inline-flex items-center">
                        🏀
                        <strong
                            class="text-lg font-bold tracking-tighter text-white transition duration-500 ease-in-out transform tracking-relaxed ">
                            Beer & Basketball
                        </strong>
                    </div>
                </div>
            </a>
            <p
                class="mt-4 text-sm text-white sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-blueGray-200 sm:py-2 sm:mt-0">
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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</x-app-layout>
