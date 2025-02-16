<?php

use Illuminate\Support\Facades\Http;
use App\Models\Movie;
function fetchMovieData($title) {
    $apiKey = env('OMDB_API');
    $response = Http::get("http://www.omdbapi.com/?t=" . urlencode($title) . "&apikey=" . $apiKey);

    if ($response->successful()) {
        $data = $response->json();

        // Save to your database
        return Movie::create([
            'title' => $data['Title'],
            'description' => $data['Plot'],
            'release_year' => $data['Year'],
            'duration' => $data['Runtime'],
            'genre' => $data['Genre'],
            'poster_url' => $data['Poster']
        ]);
    }

    return null;
}
