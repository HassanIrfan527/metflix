<div>
        <div class="justify-center flex flex-wrap flex-row p-4">
            @foreach ($movies as $movie)
                <div class="">
                    <a href="{{ route('movie', ['title' => urlencode($movie->title), 'year' => $movie->year]) }}"
                        wire:navigate wire:click="getMovie({{ $movie->title }})"><x-movie-card class="w-full md:w-1/2">
                            <x-slot name="movieTitle">{{ $movie->title }}</x-slot>
                            <x-slot name="year">{{ $movie->year }}</x-slot>
                            <x-slot name="imbdRating">{{ $movie->imdbRating }}</x-slot>
                            <x-slot name="posterImage">{{ $movie->poster }}</x-slot>
                            <x-slot name="altText">{{ $movie->title }}</x-slot>
                        </x-movie-card></a>
                </div>
            @endforeach
        </div>

</div>
