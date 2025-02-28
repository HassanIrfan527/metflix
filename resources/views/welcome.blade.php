<x-app-welcome>

    <x-slot name="title">
        MetFlix - Unlimited Movies & TV Shows
    </x-slot>



    <!-- Hero Section -->
    <section class="relative h-screen flex items-center overflow-hidden">
        <!-- Background video with fallback image -->
        <div class="absolute top-0 left-0 w-full h-full -z-20">
            <video autoplay muted loop class="absolute object-cover w-full h-full opacity-70">
                <source src="{{asset('movies/trailer.mp4')}}" type="video/mp4">
                <!-- Fallback to your image if video fails to load -->
            </video>
            <img src="{{ asset('images/bg.jpg') }}" alt="background"
                class="bg-img object-cover w-full h-full absolute top-0 left-0 video-fallback" />

            <!-- Gradient overlay for better text readability -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/80"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <!-- Left column: Main content -->
                <div class="w-full md:w-1/2 text-left mb-12 md:mb-0 animate-fade-in-up">
                    <h1 class="text-5xl md:text-7xl font-bold mb-4 text-white leading-tight">
                        <span class="inline-block animate-fade-in-left"
                            style="animation-delay: 0.2s">Unlimited</span><br>
                        <span class="inline-block animate-fade-in-left text-red-600"
                            style="animation-delay: 0.4s">Movies &amp; TV</span><br>
                        <span class="inline-block animate-fade-in-left"
                            style="animation-delay: 0.6s">Entertainment</span>
                    </h1>

                    <p class="text-xl md:text-2xl mb-6 text-gray-300 max-w-lg animate-fade-in-up"
                        style="animation-delay: 0.8s">
                        Watch anywhere. Cancel anytime. High-quality streaming starting at just $10/month.
                    </p>

                    <!-- Email signup form -->
                    <div class="flex flex-col sm:flex-row gap-4 text-black mb-8 animate-fade-in-up" style="animation-delay: 1s">
                        <input type="email" placeholder="Email address"
                            class="px-4 py-3 rounded-lg w-full sm:w-96 focus:ring-2 focus:ring-red-600 border-0" />
                        <button
                            class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-all transform hover:scale-105 flex items-center justify-center">
                            Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <!-- Features list -->
                    <div class="grid grid-cols-2 gap-4 animate-fade-in-up" style="animation-delay: 1.2s">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600 mr-2"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-300">No contracts</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600 mr-2"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-300">Cancel anytime</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600 mr-2"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-300">HD available</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600 mr-2"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-300">Watch on any device</span>
                        </div>
                    </div>
                </div>

                <!-- Right column: Floating device mockup -->
                <div class="w-full md:w-1/2 flex justify-center animate-float">
                    <div class="relative max-w-md">
                        <!-- TV/Monitor frame -->
                        <div
                            class="bg-gray-900 rounded-xl p-1 shadow-2xl transform rotate-3 transition-all hover:rotate-0 duration-300">
                            <!-- Screen content (can be an actual preview video/image) -->
                            <div class="relative overflow-hidden rounded-lg aspect-video bg-black">
                                <img src="{{ asset('movies/avengers_infinity_war.jpg') }}" alt="Movie preview"
                                    class="w-full h-full object-cover" />

                                <!-- Play button overlay -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <button
                                        class="bg-red-600/80 hover:bg-red-600 text-white w-16 h-16 rounded-full flex items-center justify-center transition-all hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Floating devices - Tablet -->
                        <div class="absolute -bottom-8 -left-12 bg-gray-800 rounded-lg p-1 shadow-lg transform -rotate-6 w-32 animate-float"
                            style="animation-delay: 0.3s">
                            <img src="{{ asset('movies/no_way_home.jpeg') }}" alt="Tablet preview"
                                class="rounded w-full aspect-video object-cover" />
                        </div>

                        <!-- Floating devices - Phone -->
                        <div class="absolute -bottom-4 -right-8 bg-gray-800 rounded-lg p-1 shadow-lg transform rotate-12 w-20 animate-float"
                            style="animation-delay: 0.6s">
                            <img src="{{ asset('movies/inception.webp') }}" alt="Phone preview"
                                class="rounded w-full aspect-video object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white opacity-70" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>


    <!-- Movie Section -->
    <livewire:pages.movies-interface />

    {{-- Features Section --}}
    <x-features></x-features>


    <!-- FAQs Section -->
    <section class="max-w-3xl mx-auto py-12 px-4">
        <h2
            class="text-3xl font-bold mb-12 text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
            Frequently Asked Questions</h2>
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <x-faq-section>
                <x-slot name="question">What is Metflix?</x-slot>
                <x-slot name="answer">
                    Metflix is a streaming platform offering a wide selection of movies, TV shows, and anime. Enjoy
                    curated collections and personalized recommendations.
                </x-slot>
            </x-faq-section>

            <!-- FAQ Item 2 -->
            <x-faq-section>
                <x-slot name="question">How do I subscribe?</x-slot>
                <x-slot name="answer">
                    Subscribing is easy and flexible. Choose from multiple plans that fit your needs, and enjoy
                    unlimited access to all our content.
                </x-slot>
            </x-faq-section>

            <!-- FAQ Item 3 -->
            <x-faq-section>
                <x-slot name="question">Can I cancel anytime?</x-slot>
                <x-slot name="answer">
                    Yes, you can cancel your subscription at any time. We prioritize user freedom and transparency
                    for a
                    hassle-free experience.
                </x-slot>
            </x-faq-section>

        </div>
    </section>

    <div class="p-12 mt-12 pt-8 text-center text-gray-400">


        <div
            class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-3xl font-bold text-red-500">Watch Movies from anywhere</h5>
            <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Stay up to date and watch movies
                from
                your mobile with our iOS and Android app, and enjoy!</p>
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                <a href="#"
                    class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="currentColor"
                            d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                        </path>
                    </svg>
                    <div class="text-left rtl:text-right">
                        <div class="mb-1 text-xs">Download on the</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Mac App Store</div>
                    </div>
                </a>
                <a href="#"
                    class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z">
                        </path>
                    </svg>
                    <div class="text-left rtl:text-right">
                        <div class="mb-1 text-xs">Get in on</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</x-app-welcome>
