<x-movie-details>
    <x-slot name="movieTitle">{{ $movie->title }}</x-slot>
    <x-slot name="year">{{ $movie->year }}</x-slot>
    <x-slot name="imdbRating">{{ $movie->imdbRating }}</x-slot>
    <x-slot name="posterImage">{{ $movie->poster }}</x-slot>
    <x-slot name="altText">{{ $movie->title }}</x-slot>
    <x-slot name="duration">{{ $movie->duration }}</x-slot>
    <x-slot name="genre">{{ $movie->genre }}</x-slot>
    <x-slot name="description">{{ $movie->description }}</x-slot>

</x-movie-details>
