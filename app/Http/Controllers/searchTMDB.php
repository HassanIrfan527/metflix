<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class searchTMDB extends Controller
{

    public function search($query, $isSeries = false)
    {

        $tmdbApiKey = config('services.tmdb.token');

        $url = "https://api.themoviedb.org/3/search/movie?query={$query}";
        if($isSeries){
            $url = "https://api.themoviedb.org/3/search/tv?query={$query}";
        }
        // Call TMDb API to search for the movie with headers
        $data = Http::withHeaders([
            'Authorization' => 'Bearer ' . $tmdbApiKey,
            'Accept' => 'application/json',
        ])->get($url);

        $response = response()->json($data);

        if ($response->getStatusCode() == 200) {
            return response()->json($response);
        } else {
            return response()->json([
                "response" => $response,
                'error' => 'Failed to retrieve data from TMDB'
            ], 500);
        }

    }
}
