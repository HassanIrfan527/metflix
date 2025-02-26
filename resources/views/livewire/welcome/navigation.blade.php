<nav
    class="z-50 sticky top-5 mx-4 my-2 flex justify-between items-center p-8 bg-white/10 backdrop-blur-xl rounded-full shadow-lg animate-fadeIn">
    <!-- Left: Logo & Brand -->
    <div class="flex items-center space-x-3">
        <a href="{{ route('welcome') }}" wire:navigate
            class="flex items-center transform transition-transform duration-300 hover:scale-105 hover:rotate-6">
            <x-application-logo class="h-10 w-10" />
            <span class="text-white font-bold text-xl ml-2">MetFlix</span>
        </a>
    </div>

    <!-- Center: Navigation Links -->
    <div class="flex space-x-6" x-data="{ activeLine: null }">
        <ul class="flex space-x-6">
            <li class="relative transition-all duration-300 transform hover:scale-105" @mouseover="activeLine = 'home'"
                @mouseleave="activeLine = null">
                <a href="#" class="text-white hover:text-red-400 transition-colors duration-300">
                    Home
                    <span class="absolute bottom-0 left-0 h-[2px] bg-red-500 rounded-full transition-all duration-300"
                        :class="activeLine === 'home' ? 'w-full' : 'w-0'" style="bottom: -5px;"></span>
                </a>
            </li>
            <li class="relative transition-all duration-300 transform hover:scale-105"
                @mouseover="activeLine = 'movies'" @mouseleave="activeLine = null">
                <a href="#" class="text-white hover:text-red-400 transition-colors duration-300">
                    Movies
                    <span class="absolute bottom-0 left-0 h-[2px] bg-red-500 rounded-full transition-all duration-300"
                        :class="activeLine === 'movies' ? 'w-full' : 'w-0'" style="bottom: -5px;"></span>
                </a>
            </li>
            <li class="relative transition-all duration-300 transform hover:scale-105"
                @mouseover="activeLine = 'tvshows'" @mouseleave="activeLine = null">
                <a href="#" class="text-white hover:text-red-400 transition-colors duration-300">
                    TV Shows
                    <span class="absolute bottom-0 left-0 h-[2px] bg-red-500 rounded-full transition-all duration-300"
                        :class="activeLine === 'tvshows' ? 'w-full' : 'w-0'" style="bottom: -5px;"></span>
                </a>
            </li>
            <li class="relative transition-all duration-300 transform hover:scale-105" @mouseover="activeLine = 'anime'"
                @mouseleave="activeLine = null">
                <a href="#" class="text-white hover:text-red-400 transition-colors duration-300">
                    Anime
                    <span class="absolute bottom-0 left-0 h-[2px] bg-red-500 rounded-full transition-all duration-300"
                        :class="activeLine === 'anime' ? 'w-full' : 'w-0'" style="bottom: -5px;"></span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Right: Search & Authentication Buttons -->
    <div class="flex items-center space-x-4">
        <!-- Search Box -->
        <div class="relative lg:block transition-all duration-500 opacity-100 scale-100">
            <div class="relative">
                <input type="text" placeholder="Search titles, genres..."
                    class="bg-white/10 backdrop-blur-md text-white border border-white/10 rounded-full py-2 pl-10 pr-4 w-64 focus:w-80 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-red-500/50 placeholder-white/50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/70 absolute left-3 top-2.5"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- Authentication Buttons -->
        @auth
            <a href="{{ route('dashboard') }}" wire:navigate
                class="bg-red-500 hover:bg-red-600 text-white font-semibold px-6 py-2 rounded-full shadow-md hover:shadow-xl transition-transform duration-300 transform hover:-translate-y-1 text-base tracking-wide focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}"
                class="border border-red-500 text-red-500 bg-transparent hover:bg-red-500 hover:text-white font-semibold px-6 py-2 rounded-full shadow-md hover:shadow-xl transition-transform duration-300 transform hover:-translate-y-1 text-base tracking-wide focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                Log in
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" wire:navigate
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold px-6 py-2 rounded-full shadow-md hover:shadow-xl transition-transform duration-300 transform hover:-translate-y-1 text-base tracking-wide focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                    Register
                </a>
            @endif
        @endauth
    </div>
</nav>
