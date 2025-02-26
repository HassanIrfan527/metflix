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
])

<div class="min-h-screen grid place-items-center bg-gray-900">

    <div class="rounded-md bg-gray-800 shadow-lg">
        <div class="md:flex px-6 leading-none max-w-6xl">
            <div class="flex-none ">
                <img src="{{ $posterImage }}" alt="{{ $altText }}"
                    class="h-96 w-72 rounded-md shadow-2xl transform -translate-y-4 border-4 border-gray-300" />
            </div>

            <div class="flex-col text-gray-300">

                <p class="pt-6 text-3xl font-bold text-center">{{ $movieTitle }} ({{ $year }})</p>
                <hr class="hr-text" data-content="">
                <div class="text-lg flex justify-between px-6 my-4">
                    <span class="font-bold">{{ $duration }} | {{ $genre }}</span>
                    <span class="font-bold"></span>
                </div>
                <p class="hidden md:block px-6 my-6 text-base text-left">{{ $description }}</p>

                <p class="flex text-lg px-6 my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 -translate-y-2 -translate-x-2"
                        aria-label="IMDb" role="img" viewBox="0 0 512 512">
                        <rect width="512" height="512" rx="15%" fill="#f5c518"></rect>
                        <path
                            d="M104 328V184H64v144zM189 184l-9 67-5-36-5-31h-50v144h34v-95l14 95h25l13-97v97h34V184zM256 328V184h62c15 0 26 11 26 25v94c0 14-11 25-26 25zm47-118l-9-1v94c5 0 9-1 10-3 2-2 2-8 2-18v-56-12l-3-4zM419 220h3c14 0 26 11 26 25v58c0 14-12 25-26 25h-3c-8 0-16-4-21-11l-2 9h-36V184h38v46c5-6 13-10 21-10zm-8 70v-34l-1-11c-1-2-4-3-6-3s-5 1-6 3v57c1 2 4 3 6 3s6-1 6-3l1-12z">
                        </path>
                    </svg>
                    {{ $imdbRating }} / 10
                </p>

                <p class="text-lg px-6 my-4">
                    <span class="font-bold"><x-rating-tags><x-slot
                                name="rating">{{ $rated }}</x-slot></x-rating-tags></span>
                </p>

                <div class="text-sm">
                    <button type="button"
                        class="border border-purple-500 text-purple-500 rounded-md px-6 py-3 m-3 transition duration-500 ease select-none hover:bg-purple-500 hover:text-white focus:outline-none focus:shadow-outline">WATCH
                        NOW</button>

                    <button type="button"
                        class="border border-red-500 text-red-500 rounded-md px-6 py-3 m-3 transition duration-500 ease select-none hover:bg-red-500 hover:text-white focus:outline-none focus:shadow-outline">ADD
                        TO WATCHLIST</button>
                    <button type="button"
                        class="border border-yellow-500 text-yellow-500 rounded-md px-6 py-3 m-3 transition duration-500 ease select-none hover:bg-yellow-500 hover:text-black focus:outline-none focus:shadow-outline">WATCH
                        TRAILER</button>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center px-6 mb-6 w-full">
            <div class="flex">
                <i class="material-icons mr-3 text-yellow-400 hover:cursor-pointer">star</i>
                <i class="material-icons text-red-600">remove_red_eye</i>
            </div>
        </div>
        <div class="bottom-0 relative p-4 bg-gray-700 rounded-b-md">
            <div class="flex flex-col md:flex-row justify-between items-center text-white">
                <div class="flex flex-col md:flex-row items-center">
                    <span class="font-semibold">Directed by:</span>
                    <span class="font-bold ml-2">{{ $directors }}</span>
                </div>
                <div class="flex flex-col md:flex-row items-center mt-2 md:mt-0">
                    <span class="font-semibold">Actors:</span>
                    <span class="font-bold ml-2">{{ $actors }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
