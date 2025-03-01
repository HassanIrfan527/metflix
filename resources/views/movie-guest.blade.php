@php
    $hours = floor($movie->duration / 60);
    $minutes = $movie->duration % 60;
@endphp
<x-app-welcome>
    <x-slot name="title">{{ $movie->title }} ({{ $movie->year }}) | MetFlix</x-slot>

    <div>
        <button onclick="window.history.back()"
            class="px-4 py-2 m-10 bg-red-500 text-white rounded-lg shadow-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:shadow-xl">
            ← Go Back
        </button>

        <x-movie-details>
            <x-slot name="movieTitle">{{ $movie->title }}</x-slot>
            <x-slot name="year">{{ $movie->year }}</x-slot>
            <x-slot name="imdbRating">{{ $movie->imdbRating }}</x-slot>
            <x-slot name="posterImage">{{ $movie->poster }}</x-slot>
            <x-slot name="altText">{{ $movie->title }}</x-slot>
            <x-slot
                name="duration">{{ $hours > 0 ? $hours . ' hours ' : '' }}{{ $minutes > 0 ? $minutes . ' minutes' : '' }}</x-slot>
            <x-slot name="genres">
                <div class="flex flex-row space-x-2">
                @foreach ($genres as $genre)
                    <x-genre-tags>
                        <x-slot name="genre">{{ $genre }}</x-slot>
                    </x-genre-tags>
                @endforeach
            </div>
            </x-slot>
            <x-slot name="description">{{ $movie->description }}</x-slot>
            <x-slot name="directors">{{ $movie->director }}</x-slot>
            <x-slot name="actors">{{ $movie->actors }}</x-slot>
            <x-slot name="rated">{{ $movie->rated }}</x-slot>
        </x-movie-details>
    </div>

</x-app-welcome>
