<div class="relative" x-data="{ open: false, query: '', results: [] }">
        <!-- Search Input -->
    <div class="relative">
        <input
            type="text"
            placeholder="Search titles, genres..."
            class="bg-gray-800 text-gray-200 w-full rounded-full pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all"
            x-model="query"
            @focus="open = true"
            @click.away="open = false"
            @keyup="$wire.search(query)"
            @keyup.debounce.300ms="open = query.length > 1"
        >
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Results Dropdown -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-4"
        class="absolute mt-2 w-full bg-gray-900 rounded-lg shadow-lg overflow-hidden z-50"
        style="display: none;"
    >
        <div class="max-h-96 overflow-y-auto">
            <!-- Loading State -->
            <div x-show="query.length > 1 && $wire.loading" class="p-4 text-center">
                <div class="animate-pulse flex justify-center">
                    <div class="h-6 w-6 bg-red-500 rounded-full"></div>
                </div>
            </div>

            <!-- Results -->
            <template x-if="query.length > 1 && !$wire.loading">
                <div>
                    <!-- Movies Section -->
                    <div x-show="$wire.results.movies && $wire.results.movies.length > 0">
                        <div class="px-4 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider bg-gray-800">
                            Movies
                        </div>
                        <template x-for="movie in $wire.results.movies" :key="movie.id">
                            <a :href="`/movies/${movie.slug}`" class="block hover:bg-gray-800 transition-colors">
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

                    <!-- TV Shows Section -->
                    <div x-show="$wire.results.shows && $wire.results.shows.length > 0">
                        <div class="px-4 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider bg-gray-800">
                            TV Shows
                        </div>
                        <template x-for="show in $wire.results.shows" :key="show.id">
                            <a :href="`/shows/${show.slug}`" class="block hover:bg-gray-800 transition-colors">
                                <div class="flex items-center p-3">
                                    <div class="w-10 h-14 bg-gray-700 rounded flex-shrink-0 overflow-hidden">
                                        <img :src="show.poster" alt="" class="w-full h-full object-cover">
                                    </div>
                                    <div class="ml-3">
                                        <div class="font-medium text-gray-200" x-text="show.title"></div>
                                        <div class="text-xs text-gray-400" x-text="`${show.year} • ${show.seasons} seasons`"></div>
                                    </div>
                                </div>
                            </a>
                        </template>
                    </div>

                    <!-- No Results State -->
                    <div x-show="!$wire.results.movies?.length && !$wire.results.shows?.length" class="p-4 text-center text-gray-400">
                        No results found for "<span x-text="query"></span>"
                    </div>
                </div>
            </template>

            <!-- Recent Searches -->
            <div x-show="query.length <= 1 && $wire.recentSearches?.length">
                <div class="px-4 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider bg-gray-800">
                    Recent Searches
                </div>
                <template x-for="search in $wire.recentSearches" :key="search.id">
                    <button
                        @click="query = search.term; $wire.search(search.term)"
                        class="block w-full text-left hover:bg-gray-800 transition-colors px-4 py-2"
                    >
                        <div class="flex items-center">
                            <div class="text-gray-300" x-text="search.term"></div>
                            <div class="ml-auto text-xs text-gray-500" x-text="search.date"></div>
                        </div>
                    </button>
                </template>
            </div>

            <!-- Popular Searches -->
            <div x-show="query.length <= 1">
                <div class="px-4 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider bg-gray-800">
                    Popular Searches
                </div>
                <div class="p-2 flex flex-wrap gap-2">
                    <button
                        @click="query = 'Action'; $wire.search('Action')"
                        class="px-3 py-1 bg-gray-800 hover:bg-gray-700 rounded-full text-sm text-gray-300 transition-colors"
                    >
                        Action
                    </button>
                    <button
                        @click="query = 'Comedy'; $wire.search('Comedy')"
                        class="px-3 py-1 bg-gray-800 hover:bg-gray-700 rounded-full text-sm text-gray-300 transition-colors"
                    >
                        Comedy
                    </button>
                    <button
                        @click="query = 'Drama'; $wire.search('Drama')"
                        class="px-3 py-1 bg-gray-800 hover:bg-gray-700 rounded-full text-sm text-gray-300 transition-colors"
                    >
                        Drama
                    </button>
                    <button
                        @click="query = 'Sci-Fi'; $wire.search('Sci-Fi')"
                        class="px-3 py-1 bg-gray-800 hover:bg-gray-700 rounded-full text-sm text-gray-300 transition-colors"
                    >
                        Sci-Fi
                    </button>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="px-4 py-2 text-xs text-center text-gray-500 border-t border-gray-800">
            Press ESC to close or Enter to search
        </div>
    </div>
</div>
