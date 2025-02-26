<div>
    <x-slot name="title">
        Search a movie
    </x-slot>

    <div class="flex justify-center items-center min-h-[30vh]">
        <div class="relative w-full max-w-md">
            <input type="text" wire:model.live="query" placeholder="Search for a movie..."
                class="w-full p-3 pl-12 text-gray-700 dark:text-gray-200 bg-white/30 dark:bg-slate-800/50 backdrop-blur-md border border-white/10 rounded-2xl shadow-lg transition-all focus:ring-2 focus:ring-red-500 focus:outline-none focus:shadow-xl focus:bg-white/50 dark:focus:bg-slate-800/60" />
            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 text-red-500 w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-5.2-5.2m2.7-6.8a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z" />
            </svg>
        </div>
    </div>

    <div class="container mx-auto p-4">
        <div wire:loading class="relative mx-[570px] items-center justify-center z-50">
            <x-loader></x-loader>
        </div>
        @if ($movies->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($movies as $movie)
                    <a href="{{ route('movie', ['title' => urlencode($movie->title), 'year' => $movie->year]) }}"
                        wire:navigate>
                        <x-movie-card class="w-full">
                            <x-slot name="movieTitle">{{ $movie->title }}</x-slot>
                            <x-slot name="year">{{ $movie->year }}</x-slot>
                            <x-slot name="imbdRating">{{ $movie->imdbRating }}</x-slot>
                            <x-slot name="posterImage">{{ $movie->poster }}</x-slot>
                            <x-slot name="altText">{{ $movie->title }}</x-slot>
                        </x-movie-card>
                    </a>
                @endforeach
            </div>
            {{ $movies->links() }}
        @endif
    </div>
</div>
