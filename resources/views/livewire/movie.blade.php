@php
    $hours = floor($movie->duration / 60);
    $minutes = $movie->duration % 60;
@endphp



<div>
    <button onclick="window.history.back()" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
        ← Back to Movies
    </button>

    <x-movie-details>
        <x-slot name="movieTitle">{{ $movie->title }}</x-slot>
        <x-slot name="year">{{ $movie->year }}</x-slot>
        <x-slot name="imdbRating">{{ $movie->imdbRating }}</x-slot>
        <x-slot name="posterImage">{{ $movie->poster }}</x-slot>
        <x-slot name="altText">{{ $movie->title }}</x-slot>
        <x-slot
            name="duration">{{ $hours > 0 ? $hours . ' hours ' : '' }}{{ $minutes > 0 ? $minutes . ' minutes' : '' }}</x-slot>
        <x-slot name="genre">{{ $movie->genre }}</x-slot>
        <x-slot name="description">{{ $movie->description }}</x-slot>
        <x-slot name="directors">{{ $movie->director }}</x-slot>
        <x-slot name="actors">{{ $movie->actors }}</x-slot>
        <x-slot name="rated">{{ $movie->rated }}</x-slot>
    </x-movie-details>
</div>
