@props([
    'movieTitle',
    'year',
    'imdbRating',
    'posterImage',
    'altText',
    'duration',
    'genre',
    'description',
    'directors',
    'actors',
    'rated',
    'releaseDate' => null,
    'languages' => 'English',
    'trailerLink' => '#',
])

<div class="min-h-screen grid place-items-center bg-gradient-to-br from-gray-900 to-gray-800 p-4">
    <div
        class="rounded-lg bg-gray-800 shadow-xl transition-all duration-500 hover:shadow-2xl hover:shadow-purple-500/20 max-w-6xl">
        <!-- Main Content Section -->
        <div class="md:flex px-6 leading-none">
            <!-- Poster Section with Animation -->
            <div class="flex-none relative group">
                <img src="{{ $posterImage }}" alt="{{ $altText }}"
                    class="h-96 w-72 rounded-md shadow-2xl transform -translate-y-4 border-4 border-gray-300 transition-all duration-500 group-hover:scale-105 group-hover:border-purple-400 object-cover" />

                <!-- Hover overlay with quick actions -->
                <div
                    class="absolute inset-0 h-96 w-72 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center rounded-md transform translate-y-4 group-hover:translate-y-0">
                    <div class="flex flex-col items-center space-y-4">
                        <button type="button"
                            class="bg-white/20 hover:bg-white/30 text-white rounded-full p-3 transition-all duration-300 transform hover:scale-110"
                            title="Play Trailer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                        <span class="text-white text-sm">Watch Trailer</span>
                    </div>

                </div>
            </div>

            <!-- Details Section -->
            <div class="flex-col text-gray-300 md:ml-6">
                <!-- Title with animated underline -->
                <div class="relative pt-6 pb-2">
                    <h1 class="text-3xl font-bold text-white">{{ $movieTitle }} <span
                            class="text-gray-400">({{ $year }})</span></h1>
                    <div
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 transition-all duration-700 group-hover:w-full">
                    </div>
                </div>

                <!-- Movie basic info -->
                <div class="text-lg flex flex-wrap justify-between my-4">
                    <span class="font-medium text-gray-400">{{ $duration }} | {{ $genre }}</span>
                    <span class="font-medium text-gray-400">{{ $releaseDate ?? $year }}</span>
                </div>

                <!-- Rating section with animation -->
                <div class="flex items-center space-x-4 my-4">
                    <div
                        class="flex items-center bg-yellow-900/30 px-3 py-2 rounded-lg transition-all duration-300 hover:bg-yellow-900/50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" aria-label="IMDb" role="img"
                            viewBox="0 0 512 512">
                            <rect width="512" height="512" rx="15%" fill="#f5c518"></rect>
                            <path
                                d="M104 328V184H64v144zM189 184l-9 67-5-36-5-31h-50v144h34v-95l14 95h25l13-97v97h34V184zM256 328V184h62c15 0 26 11 26 25v94c0 14-11 25-26 25zm47-118l-9-1v94c5 0 9-1 10-3 2-2 2-8 2-18v-56-12l-3-4zM419 220h3c14 0 26 11 26 25v58c0 14-12 25-26 25h-3c-8 0-16-4-21-11l-2 9h-36V184h38v46c5-6 13-10 21-10zm-8 70v-34l-1-11c-1-2-4-3-6-3s-5 1-6 3v57c1 2 4 3 6 3s6-1 6-3l1-12z">
                            </path>
                        </svg>
                        <span class="ml-2 text-xl font-bold text-white">{{ $imdbRating }}<span
                                class="text-sm text-gray-400">/10</span></span>
                    </div>

                    <div class="bg-gray-700/50 px-3 py-2 rounded-lg">
                        <span class="font-bold text-white">{{ $rated }}</span>
                    </div>
                </div>

                <!-- Description with fade-in effect -->
                <div class="relative overflow-hidden" x-data="{ expanded: false }">
                    <p class="hidden md:block my-6 text-base text-gray-300 leading-relaxed max-h-28 overflow-hidden">
                        {{ $description }}</p>
                    <div
                        class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-gray-800 to-transparent md:block hidden">
                    </div>
                    <button
                        class="text-purple-400 hover:text-purple-300 z-50 text-sm transition-colors duration-300 md:block hidden"
                        @click="expanded = !expanded"><span x-show="!expanded" x-cloak>Read More</span>
                        <span x-show="expanded" x-cloak>Read Less</span></button>
                </div>

                <!-- Action buttons with hover effects -->
                <div class="flex flex-wrap gap-2 my-6">
                    <button type="button"
                        class="bg-purple-600 hover:bg-purple-700 text-white rounded-md px-6 py-3 transition-all duration-300 ease transform hover:scale-105 hover:shadow-lg hover:shadow-purple-500/50 focus:outline-none">
                        WATCH NOW
                    </button>

                    <button type="button"
                        class="border border-red-500 text-red-500 rounded-md px-6 py-3 transition-all duration-300 ease hover:bg-red-500 hover:text-white focus:outline-none transform hover:scale-105">
                        ADD TO WATCHLIST
                    </button>

                    <button type="button"
                        class="border border-yellow-500 text-yellow-500 rounded-md px-6 py-3 transition-all duration-300 ease hover:bg-yellow-500 hover:text-black focus:outline-none transform hover:scale-105">
                        WATCH TRAILER
                    </button>
                </div>
            </div>
        </div>

        <!-- Interactive Icons -->
        <div class="flex justify-between items-center px-6 py-4 w-full border-t border-gray-700 mt-4">
            <div class="flex items-center space-x-6">
                <button class="group flex items-center space-x-2 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-yellow-400 transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-12"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="text-sm text-gray-400 group-hover:text-yellow-400 transition-colors duration-300">Rate
                        this</span>
                </button>

                <button class="group flex items-center space-x-2 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-red-600 transition-transform duration-300 group-hover:scale-110"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd"
                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm text-gray-400 group-hover:text-red-600 transition-colors duration-300">1.2K
                        views</span>
                </button>

                <button class="group flex items-center space-x-2 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-blue-500 transition-transform duration-300 group-hover:scale-110"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                    </svg>
                    <span
                        class="text-sm text-gray-400 group-hover:text-blue-500 transition-colors duration-300">Share</span>
                </button>
            </div>

            <div class="flex items-center">
                <span class="text-sm text-gray-400">Languages: {{ $languages }}</span>
            </div>
        </div>

        <!-- Credits Section with Hover Effect -->
        <div class="p-6 bg-gray-700 rounded-b-lg transition-all duration-300 hover:bg-gray-600">
            <div class="grid md:grid-cols-2 gap-4 text-white">
                <div class="flex flex-col">
                    <span class="text-gray-400 text-sm mb-1">Directed by</span>
                    <span class="font-bold text-white">{{ $directors }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-400 text-sm mb-1">Starring</span>
                    <span class="font-bold text-white">{{ $actors }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
