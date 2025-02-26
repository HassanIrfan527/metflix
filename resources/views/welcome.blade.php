    <x-app-welcome>

        <x-slot name="title">
            MetFlix - Unlimited Movies & TV Shows
        </x-slot>

        <!-- Hero Section -->
        <section class="relative h-screen flex items-center">
            <div class="container mx-auto px-4">
                <div class="img-box fixed top-0 left-0 w-full h-full -z-20">
                    <img src="{{ asset('images/bg.jpg') }}" alt="background"
                        class="bg-img object-cover w-full min-h-full" />
                    <div class="bg-overlay"></div>
                </div>

                <div class="container mx-auto px-4 relative z-10 text-center">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">Welcome to MetFlix!</h1>
                    <p class="text-xl md:text-3xl">Watch anywhere - Cancel anytime - Unlimited Entertainment </p>
                    <p class="text-xl md:text-2xl mb-4">Packages starting with $10 /month </p>
                    <a href="{{ route('pricing') }}" wire:navigate
                        class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-all">
                        Get Started
                    </a>
                </div>
        </section>

        <!-- Movie Section -->
        <livewire:pages.movies-interface />

        <section class="py-16 width-full px-6 mx-auto container items-center self-center">
            <h2
                class="text-3xl font-bold mb-12 text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                Why MetFlix?
            </h2>
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-3 gap-12">
                    <!-- Card 1 -->
                    <div
                        class="group relative flex flex-col items-center p-8 bg-white/10 rounded-xl shadow-lg backdrop-blur-md transform transition duration-300 hover:scale-105 hover:bg-white/20">
                        <div class="text-red-600 text-5xl mb-4">🎬</div>
                        <h3 class="text-xl font-bold mb-4">Exclusive Content</h3>
                        <p class="text-gray-400 text-center">
                            Original movies and TV shows you can't find anywhere else.
                        </p>
                        <!-- Subtle border animation on hover -->
                        <div
                            class="absolute inset-0 rounded-xl border border-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="group relative flex flex-col items-center p-8 bg-white/10 rounded-xl shadow-lg backdrop-blur-md transform transition duration-300 hover:scale-105 hover:bg-white/20">
                        <div class="text-red-600 text-5xl mb-4">📱</div>
                        <h3 class="text-xl font-bold mb-4">Watch Anywhere</h3>
                        <p class="text-gray-400 text-center">
                            Stream on your phone, tablet, laptop, and TV.
                        </p>
                        <div
                            class="absolute inset-0 rounded-xl border border-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="group relative flex flex-col items-center p-8 bg-white/10 rounded-xl shadow-lg backdrop-blur-md transform transition duration-300 hover:scale-105 hover:bg-white/20">
                        <div class="text-red-600 text-5xl mb-4">🎯</div>
                        <h3 class="text-xl font-bold mb-4">Personalized Picks</h3>
                        <p class="text-gray-400 text-center">
                            Recommendations tailored just for you.
                        </p>
                        <div
                            class="absolute inset-0 rounded-xl border border-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div
                        class="group relative flex flex-col items-center p-8 bg-white/10 rounded-xl shadow-lg backdrop-blur-md transform transition duration-300 hover:scale-105 hover:bg-white/20">
                        <div class="text-red-600 text-5xl mb-4">⚡</div>
                        <h3 class="text-xl font-bold mb-4">Fast & Smooth Streaming</h3>
                        <p class="text-gray-400 text-center">
                            Enjoy high-quality video playback with zero buffering.
                        </p>
                        <div
                            class="absolute inset-0 rounded-xl border border-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div
                        class="group relative flex flex-col items-center p-8 bg-white/10 rounded-xl shadow-lg backdrop-blur-md transform transition duration-300 hover:scale-105 hover:bg-white/20">
                        <div class="text-red-600 text-5xl mb-4">
                            <svg width="48px" height="48px" class="w-12 h-12" viewBox="0 -196 1416 1416"
                                class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M324.358919 22.140541H1361.643243c18.819459 0 33.210811 14.391351 33.210811 33.21081v645.396757c0 18.819459-14.391351 33.210811-33.210811 33.210811H324.358919c-18.819459 0-33.210811-14.391351-33.210811-33.210811V55.351351c0-18.819459 14.391351-33.210811 33.210811-33.21081z"
                                    fill="#9DBE87" />
                                <path
                                    d="M1361.643243 756.099459H324.358919c-30.996757 0-55.351351-24.354595-55.351351-55.351351V55.351351c0-30.996757 24.354595-55.351351 55.351351-55.351351H1361.643243c30.996757 0 55.351351 24.354595 55.351352 55.351351v645.396757c0 29.88973-24.354595 55.351351-55.351352 55.351351zM324.358919 44.281081c-6.642162 0-11.07027 4.428108-11.07027 11.07027v645.396757c0 6.642162 4.428108 11.07027 11.07027 11.07027H1361.643243c6.642162 0 11.07027-4.428108 11.070271-11.07027V55.351351c0-6.642162-4.428108-11.07027-11.070271-11.07027H324.358919z"
                                    fill="#131313" />
                                <path
                                    d="M230.261622 116.237838h1038.391351c18.819459 0 33.210811 14.391351 33.210811 33.210811v645.396756c0 18.819459-14.391351 33.210811-33.210811 33.210811H230.261622c-18.819459 0-33.210811-14.391351-33.210811-33.210811V149.448649c0-18.819459 14.391351-33.210811 33.210811-33.210811z"
                                    fill="#9DBE87" />
                                <path
                                    d="M1267.545946 850.196757H230.261622c-30.996757 0-55.351351-24.354595-55.351352-55.351352V149.448649c0-30.996757 24.354595-55.351351 55.351352-55.351352h1038.391351c30.996757 0 55.351351 24.354595 55.351351 55.351352v645.396756c-1.107027 29.88973-25.461622 55.351351-56.458378 55.351352zM230.261622 138.378378c-6.642162 0-11.07027 4.428108-11.070271 11.070271v645.396756c0 6.642162 4.428108 11.07027 11.070271 11.070271h1038.391351c6.642162 0 11.07027-4.428108 11.07027-11.070271V149.448649c0-6.642162-4.428108-11.07027-11.07027-11.070271H230.261622z"
                                    fill="#131313" />
                                <path
                                    d="M143.913514 208.121081h1038.391351c18.819459 0 33.210811 14.391351 33.210811 33.210811v645.396757c0 18.819459-14.391351 33.210811-33.210811 33.21081H143.913514c-18.819459 0-33.210811-14.391351-33.210811-33.21081V241.331892c0-17.712432 14.391351-33.210811 33.210811-33.210811z"
                                    fill="#9DBE87" />
                                <path
                                    d="M1182.304865 942.08H143.913514c-30.996757 0-55.351351-24.354595-55.351352-55.351351V241.331892c0-30.996757 24.354595-55.351351 55.351352-55.351351h1038.391351c30.996757 0 55.351351 24.354595 55.351351 55.351351v645.396757c0 29.88973-25.461622 55.351351-55.351351 55.351351zM143.913514 230.261622c-6.642162 0-11.07027 4.428108-11.070271 11.07027v645.396757c0 6.642162 4.428108 11.07027 11.070271 11.07027h1038.391351c6.642162 0 11.07027-4.428108 11.07027-11.07027V241.331892c0-6.642162-4.428108-11.07027-11.07027-11.07027H143.913514z"
                                    fill="#131313" />
                                <path
                                    d="M55.351351 290.041081h1038.391352c18.819459 0 33.210811 14.391351 33.210811 33.210811v645.396757c0 18.819459-14.391351 33.210811-33.210811 33.21081H55.351351c-18.819459 0-33.210811-14.391351-33.21081-33.21081V323.251892c0-17.712432 14.391351-33.210811 33.21081-33.210811z"
                                    fill="#9DBE87" />
                                <path
                                    d="M1093.742703 1024H55.351351c-30.996757 0-55.351351-24.354595-55.351351-55.351351V323.251892c0-30.996757 24.354595-55.351351 55.351351-55.351351h1038.391352c30.996757 0 55.351351 24.354595 55.351351 55.351351v645.396757c0 30.996757-25.461622 55.351351-55.351351 55.351351zM55.351351 312.181622c-6.642162 0-11.07027 4.428108-11.07027 11.07027v645.396757c0 6.642162 4.428108 11.07027 11.07027 11.07027h1038.391352c6.642162 0 11.07027-4.428108 11.07027-11.07027V323.251892c0-6.642162-4.428108-11.07027-11.07027-11.07027H55.351351z"
                                    fill="#131313" />
                                <path
                                    d="M954.257297 902.227027H194.836757c0-52.03027-43.174054-95.204324-95.204325-95.204324V472.700541c52.03027 0 95.204324-43.174054 95.204325-95.204325h759.42054c0 52.03027 43.174054 95.204324 95.204325 95.204325v334.322162c-53.137297 0-95.204324 43.174054-95.204325 95.204324z"
                                    fill="#D6F0C5" />
                                <path
                                    d="M954.257297 924.367568H194.836757c-12.177297 0-22.140541-9.963243-22.140541-22.140541 0-39.852973-33.210811-73.063784-73.063784-73.063784-12.177297 0-22.140541-9.963243-22.14054-22.14054V472.700541c0-12.177297 9.963243-22.140541 22.14054-22.140541 39.852973 0 73.063784-33.210811 73.063784-73.063784 0-12.177297 9.963243-22.140541 22.140541-22.14054h759.42054c12.177297 0 22.140541 9.963243 22.140541 22.14054 0 39.852973 33.210811 73.063784 73.063784 73.063784 12.177297 0 22.140541 9.963243 22.14054 22.140541v334.322162c0 12.177297-9.963243 22.140541-22.14054 22.14054-39.852973 0-73.063784 33.210811-73.063784 73.063784 0 12.177297-9.963243 22.140541-22.140541 22.140541z m-739.494054-44.281082h718.460541c8.856216-46.495135 46.495135-84.134054 92.99027-92.99027V492.627027c-46.495135-8.856216-84.134054-46.495135-92.99027-92.99027H214.763243c-8.856216 46.495135-46.495135 84.134054-92.99027 92.99027V785.989189c46.495135 9.963243 84.134054 47.602162 92.99027 94.097297z"
                                    fill="#131313" />
                                <path
                                    d="M576.761081 790.417297c-35.424865 0-73.063784-13.284324-99.632432-47.602162-7.749189-9.963243-5.535135-23.247568 3.321081-30.996757 9.963243-7.749189 23.247568-5.535135 30.996756 3.321081 26.568649 34.317838 67.528649 35.424865 94.097298 26.568649 22.140541-7.749189 35.424865-22.140541 35.424865-37.638919 0-14.391351-34.317838-24.354595-64.207568-33.210811-46.495135-14.391351-105.167568-30.996757-105.167567-86.348108 0-26.568649 16.605405-50.923243 45.388108-65.314594 35.424865-17.712432 95.204324-24.354595 151.662702 16.605405 9.963243 7.749189 12.177297 21.033514 4.428108 30.996757-7.749189 9.963243-21.033514 12.177297-30.996756 4.428108-37.638919-27.675676-79.705946-26.568649-105.167568-13.284324-13.284324 6.642162-22.140541 16.605405-22.14054 26.568648 0 21.033514 30.996757 30.996757 73.063783 44.281081 45.388108 13.284324 95.204324 28.782703 95.204325 75.277838 0 34.317838-25.461622 65.314595-65.314595 79.705946-11.07027 3.321081-26.568649 6.642162-40.96 6.642162z"
                                    fill="#131313" />
                                <path
                                    d="M574.547027 549.085405c-12.177297 0-22.140541-9.963243-22.140541-22.14054v-48.709189c0-12.177297 9.963243-22.140541 22.140541-22.140541s22.140541 9.963243 22.140541 22.140541v48.709189c0 13.284324-9.963243 22.140541-22.140541 22.14054z"
                                    fill="#131313" />
                                <path
                                    d="M574.547027 832.484324c-12.177297 0-22.140541-9.963243-22.140541-22.14054v-36.531892c0-12.177297 9.963243-22.140541 22.140541-22.140541s22.140541 9.963243 22.140541 22.140541v36.531892c0 12.177297-9.963243 22.140541-22.140541 22.14054z"
                                    fill="#131313" />
                                <path
                                    d="M285.612973 653.145946m-40.96 0a40.96 40.96 0 1 0 81.92 0 40.96 40.96 0 1 0-81.92 0Z"
                                    fill="#AECD99" />
                                <path
                                    d="M285.612973 715.139459c-34.317838 0-63.100541-27.675676-63.100541-63.10054s27.675676-63.100541 63.100541-63.100541c34.317838 0 63.100541 27.675676 63.100541 63.100541s-28.782703 63.100541-63.100541 63.10054z m0-80.812973c-9.963243 0-18.819459 7.749189-18.819459 18.81946s7.749189 18.819459 18.819459 18.819459c9.963243 0 18.819459-7.749189 18.819459-18.819459s-8.856216-18.819459-18.819459-18.81946z"
                                    fill="#131313" />
                                <path
                                    d="M865.695135 653.145946m-40.96 0a40.96 40.96 0 1 0 81.92 0 40.96 40.96 0 1 0-81.92 0Z"
                                    fill="#AECD99" />
                                <path
                                    d="M865.695135 715.139459c-34.317838 0-63.100541-27.675676-63.10054-63.10054s27.675676-63.100541 63.10054-63.100541c34.317838 0 63.100541 27.675676 63.100541 63.100541s-28.782703 63.100541-63.100541 63.10054z m0-80.812973c-9.963243 0-18.819459 7.749189-18.819459 18.81946s7.749189 18.819459 18.819459 18.819459 18.819459-7.749189 18.81946-18.819459-8.856216-18.819459-18.81946-18.81946z"
                                    fill="#131313" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Flexible Subscription Plans</h3>
                        <p class="text-gray-400 text-center">
                            Choose a plan that fits your needs, from free access to premium features.
                        </p>
                        <div
                            class="absolute inset-0 rounded-xl border border-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div
                        class="group relative flex flex-col items-center p-8 bg-white/10 rounded-xl shadow-lg backdrop-blur-md transform transition duration-300 hover:scale-105 hover:bg-white/20">
                        <div
                            class="absolute top-0 right-0 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded-bl-lg">
                            Coming Soon
                        </div>
                        <div class="text-red-600 text-5xl mb-4">
                            <svg width="48px" height="48px" class="w-12 h-12" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg">
                                <g fill="#fff">
                                    <path
                                        d="m 8 1.992188 c -2.617188 0 -5.238281 0.933593 -7.195312 2.808593 l -0.496094 0.480469 c -0.3984378 0.378906 -0.410156 1.011719 -0.03125 1.410156 c 0.382812 0.398438 1.015625 0.410156 1.414062 0.027344 l 0.5 -0.476562 c 3.085938 -2.953126 8.53125 -2.953126 11.617188 0 l 0.5 0.476562 c 0.398437 0.382812 1.03125 0.371094 1.414062 -0.027344 c 0.378906 -0.398437 0.367188 -1.03125 -0.03125 -1.410156 l -0.496094 -0.480469 c -1.957031 -1.875 -4.578124 -2.808593 -7.195312 -2.808593 z m -0.03125 4.007812 c -1.570312 0.011719 -3.128906 0.628906 -4.207031 1.8125 l -0.5 0.550781 c -0.375 0.40625 -0.347657 1.042969 0.0625 1.414063 c 0.410156 0.371094 1.042969 0.339844 1.414062 -0.070313 l 0.5 -0.542969 c 1.242188 -1.363281 3.992188 -1.492187 5.398438 -0.128906 c 0.121093 -0.023437 0.242187 -0.035156 0.363281 -0.035156 c 0.53125 0 1.039062 0.210938 1.414062 0.585938 l 0.222657 0.222656 c 0.011719 -0.011719 0.023437 -0.019532 0.039062 -0.03125 c 0.40625 -0.371094 0.4375 -1.007813 0.0625 -1.414063 l -0.5 -0.550781 c -1.125 -1.230469 -2.703125 -1.824219 -4.269531 -1.8125 z m 0.03125 4 c -0.511719 0 -1.023438 0.195312 -1.414062 0.585938 c -0.78125 0.78125 -0.78125 2.046874 0 2.828124 s 2.046874 0.78125 2.828124 0 c 0.210938 -0.210937 0.359376 -0.453124 0.457032 -0.714843 l -0.285156 -0.285157 c -0.554688 -0.554687 -0.707032 -1.367187 -0.46875 -2.070312 c -0.335938 -0.226562 -0.726563 -0.34375 -1.117188 -0.34375 z m 0 0"
                                        fill-opacity="0.34902" />
                                    <path
                                        d="m 11 10 c -0.265625 0 -0.519531 0.105469 -0.707031 0.292969 c -0.390625 0.390625 -0.390625 1.023437 0 1.414062 l 1.292969 1.292969 l -1.292969 1.292969 c -0.390625 0.390625 -0.390625 1.023437 0 1.414062 s 1.023437 0.390625 1.414062 0 l 1.292969 -1.292969 l 1.292969 1.292969 c 0.390625 0.390625 1.023437 0.390625 1.414062 0 s 0.390625 -1.023437 0 -1.414062 l -1.292969 -1.292969 l 1.292969 -1.292969 c 0.390625 -0.390625 0.390625 -1.023437 0 -1.414062 c -0.1875 -0.1875 -0.441406 -0.292969 -0.707031 -0.292969 s -0.519531 0.105469 -0.707031 0.292969 l -1.292969 1.292969 l -1.292969 -1.292969 c -0.1875 -0.1875 -0.441406 -0.292969 -0.707031 -0.292969 z m 0 0" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Offline Viewing</h3>
                        <p class="text-gray-400 text-center">
                            Download your favorite shows and movies to watch anytime.
                        </p>
                        <div
                            class="absolute inset-0 rounded-xl border border-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                <div
                    class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                    <a href="#"
                        class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                            data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 384 512">
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
