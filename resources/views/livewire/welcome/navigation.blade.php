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
    <div x-data="{ search: '', movies: [], showDropdown: false }"  class="flex items-center space-x-4">

            <!-- Search Input -->
            <div x-data="movieSearch()" class="relative">
                <input
                    type="text"
                    placeholder="Search titles, genres..."
                    class="bg-gray-800 backdrop-blur-md text-gray-200 w-full rounded-full pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all"
                    x-model="search"
                    @focus="showDropdown = true"
                    @click.away="showDropdown = false"
                    @input="fetchMovies"
                    @keydown.escape="showDropdown = false"
                    @keydown.enter="showDropdown = true"
                >
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <!-- Results Dropdown -->
                <div
                    x-show="showDropdown"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-4"
                    class="absolute mt-2 w-full bg-gray-900 rounded-lg shadow-lg overflow-hidden z-50"
                >
                    <div class="max-h-96 overflow-y-auto">
                        <!-- Loading State -->
                        <div x-show="search.length > 1 && loading" class="p-4 text-center">
                            <div class="animate-pulse flex justify-center">
                                <div class="h-6 w-6 bg-red-500 rounded-full"></div>
                            </div>
                        </div>

                        <!-- Results -->
                        <template x-if="search.length > 1 && !loading">
                            <div>
                                <div x-show="movies.length > 0">
                                    <div class="px-4 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider bg-gray-800">
                                        Movies
                                    </div>
                                    <template x-for="movie in movies" :key="movie.id">
                                        <a :href="`{{ route('guest.movie', ['title' => '']) }}/${movie.title}/${movie.year}`" class="block hover:bg-gray-800 transition-colors">
                                            <div class="flex items-center p-3">
                                                <div class="w-10 h-14 bg-gray-700 rounded flex-shrink-0 overflow-hidden">
                                                    <img :src="movie.poster" alt="" class="w-full h-full object-cover">
                                                </div>
                                                <div class="ml-3">
                                                    <div class="font-medium text-gray-200" x-text="movie.title"></div>
                                                    <div class="text-xs text-gray-400" x-text="movie.year"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </template>
                                </div>

                                <!-- No Results State -->
                                <div x-show="movies.length === 0" class="p-4 text-center text-gray-400">
                                    No results found for "<span x-text="search"></span>"
                                </div>
                            </div>
                        </template>
                    </div>

                    <div class="px-4 py-2 text-xs text-center text-gray-500 border-t border-gray-800">
                        Press ESC to close or Enter to search
                    </div>
                </div>
            </div>

            <script>
                function movieSearch() {
                    return {
                        search: '',
                        loading: false,
                        movies: [],
                        showDropdown: false,

                        fetchMovies() {
                            if (this.search.length < 2) {
                                this.movies = [];
                                this.showDropdown = false;
                                return;
                            }

                            this.loading = true;

                            fetch('{{ route('post.search') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                },
                                body: JSON.stringify({ query: this.search })
                            })
                            .then(res => res.json())
                            .then(data => {
                                this.movies = data;
                                this.showDropdown = true;
                            })
                            .catch(error => console.error('Error fetching movies:', error))
                            .finally(() => this.loading = false);
                        }
                    };
                }
            </script>



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
