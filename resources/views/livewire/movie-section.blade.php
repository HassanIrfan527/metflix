<div>
    <div class="justify-center flex flex-wrap flex-row p-4">
        @foreach ($movies as $movie)
            <div class="">
                <a href="{{ route('movie', ['title' => urlencode($movie->title), 'year' => $movie->year]) }}"
                    wire:navigate>
                    <x-movie-card class="w-full md:w-1/2" wire:loading.class="opacity-50">
                        <x-slot name="movieTitle">{{ $movie->title }}</x-slot>
                        <x-slot name="year">{{ $movie->year }}</x-slot>
                        <x-slot name="imbdRating">{{ $movie->imdbRating }}</x-slot>
                        <x-slot name="posterImage">{{ $movie->poster }}</x-slot>
                        <x-slot name="altText">{{ $movie->title }}</x-slot>
                        <x-slot name="director">{{ $movie->director }}</x-slot>
                        <x-slot name="runtime">{{ $movie->duration}} minutes</x-slot>
                    </x-movie-card>
                </a>
            </div>
        @endforeach
    </div>

    <div class="px-6 mt-4">
        {{ $movies->links() }}
    </div>
</div>
