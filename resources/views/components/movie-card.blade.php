@props(['movieTitle', 'year', 'imbdRating', 'posterImage', 'altText', 'genre' => 'Action', 'runtime' => '120 min', 'director' => 'Unknown'])

<div class="relative snap-center transition-all duration-300 transform hover:scale-105 hover:z-10 w-64 h-96 m-6 movie-card">
    <!-- Movie Card with hover group -->
    <div class="group hover:cursor-pointer relative h-full rounded-2xl overflow-hidden shadow-2xl transition-shadow duration-300 hover:shadow-lg hover:shadow-purple-500/20">
        <!-- Movie Poster with subtle zoom effect -->
        <img
            src="{{ $posterImage }}"
            alt="{{ $altText }}"
            class="w-full h-full object-cover aspect-[2/3] transition-transform duration-700 group-hover:scale-110"
        >

        <!-- Card Border Glow Effect -->
        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 border border-purple-400/30 box-border"></div>

        <!-- Glassmorphic Overlay with improved gradient -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent p-6 flex flex-col justify-end opacity-90 group-hover:opacity-100 transition-opacity duration-300">

            <!-- Movie Details Container - slides up on hover -->
            <div class="backdrop-blur-sm bg-black/30 rounded-xl p-4 transition-all duration-500 ease-in-out transform translate-y-4 group-hover:translate-y-0 border border-white/10">
                <!-- Title with subtle animation -->
                <h3 class="font-bold text-lg text-white mb-2 transition-all duration-300 group-hover:text-purple-300">{{ $movieTitle }}</h3>

                <!-- Basic Movie Info -->
                <div class="flex items-center justify-between">
                    <p class="text-sm text-purple-400">{{ $year }}</p>
                    <div class="flex items-center bg-white/10 px-2 py-1 rounded-full transition-all duration-300 group-hover:bg-purple-900/30">
                        <span class="text-xs text-amber-400 transition-transform duration-300 group-hover:scale-110 inline-block">★</span>
                        <span class="text-xs text-white ml-1">{{ $imbdRating }}</span>
                    </div>
                </div>

                <!-- Additional Movie Details - initially hidden, revealed on hover -->
                <div class="mt-3 pt-3 border-t border-white/10 transform transition-all duration-500 max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100">
                    <div class="flex items-center text-xs text-white/80 mb-2">
                        <span class="bg-purple-800/40 px-2 py-1 rounded-full mr-2">{{ $genre }}</span>
                        <span class="text-white/60">{{ $runtime }}</span>
                    </div>
                    <p class="text-xs text-white/70">Director: <span class="text-white/90">{{ $director }}</span></p>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-between mt-3">
                        <button class="bg-purple-600 hover:bg-purple-700 text-white text-xs py-1 px-3 rounded-full transition-all duration-300 transform hover:scale-105">
                            Watch Now
                        </button>
                        <div class="flex space-x-2" >
                            <button class="text-white bg-white/10 p-1 rounded-full transition-colors duration-300 hover:bg-white/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </button>
                            <div x-show="tooltip" class="absolute bottom-full mb-2 w-32 p-2 bg-gray-700 text-white text-sm rounded">
                                This is a tooltip
                            </div>
                            <button class="text-white bg-white/10 p-1 rounded-full transition-colors duration-300 hover:bg-white/20" title="More info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
