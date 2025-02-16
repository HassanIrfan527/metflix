<nav class="mx-3 flex flex-1 justify-between items-center px-6 py-4">

    <div class="left-nav text-left">
        <a href="{{route('welcome')}}" class="cursor-pointer text-3xl text-white">Met<span class="text-red-500">Flix</span></a>
    </div>
    <div class="bottom-nav" x-data="{ activeLine: null }">
        <ul class="style-none flex space-x-6 text-white">
            <li
                class="relative transition-all duration-300 px-2 mx-2"
                @mouseover="activeLine = 'home'"
                @mouseleave="activeLine = null"
            >
                <a href="#" class="pb-2 inline-block relative">
                    Home
                    <span
                        class="absolute bottom-0 left-0 h-[2px] bg-red-500 rounded-full transition-all duration-300"
                        :class="activeLine === 'home' ? 'w-full' : 'w-0'"
                        style="bottom: -5px;"
                    ></span>
                </a>
            </li>
            <li
                class="relative transition-all duration-300"
                @mouseover="activeLine = 'movies'"
                @mouseleave="activeLine = null"
            >
                <a href="#" class="pb-2 inline-block relative">
                    Movies
                    <span
                        class="absolute bottom-0 left-0 h-[2px] bg-red-500 rounded-full transition-all duration-300"
                        :class="activeLine === 'movies' ? 'w-full' : 'w-0'"
                        style="bottom: -5px;"
                    ></span>
                </a>
            </li>
            <li
                class="relative transition-all duration-300"
                @mouseover="activeLine = 'tvshows'"
                @mouseleave="activeLine = null"
            >
                <a href="#" class="pb-2 inline-block relative">
                    TV Shows
                    <span
                        class="absolute bottom-0 left-0 h-[2px] bg-red-500 rounded-full transition-all duration-300"
                        :class="activeLine === 'tvshows' ? 'w-full' : 'w-0'"
                        style="bottom: -5px;"
                    ></span>
                </a>
            </li>
            <li
                class="relative transition-all duration-300"
                @mouseover="activeLine = 'anime'"
                @mouseleave="activeLine = null"
            >
                <a href="#" class="pb-2 inline-block relative">
                    Anime
                    <span
                        class="absolute bottom-0 left-0 h-[2px] bg-red-500 rounded-full transition-all duration-300"
                        :class="activeLine === 'anime' ? 'w-full' : 'w-0'"
                        style="bottom: -5px;"
                    ></span>
                </a>
            </li>
        </ul>
    </div>
    <div class="right-nav flex flex-row items-center">
        @auth
            <a href="{{ route('dashboard') }}"
                class="bg-red-500 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-lg tracking-wide focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                Dashboard
            </a>
        @else
            <!-- Transparent Login Button -->
            <a href="{{ route('login') }}"
                class="border-2 border-red-500 text-red-500 bg-transparent hover:bg-red-500 hover:text-white font-semibold px-8 py-3 rounded-full hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 text-lg tracking-wide focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                Log in
            </a>

            @if (Route::has('register'))
                <!-- Solid Red Register Button -->
                <a href="{{ route('register') }}"
                    class="bg-red-500 mx-6 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-lg tracking-wide focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                    Register
                </a>
            @endif
        @endauth
    </div>
</nav>
