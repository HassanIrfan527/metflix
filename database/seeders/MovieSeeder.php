<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Movie;
use Carbon\Carbon;
use Exception;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($title)
    {


        $apiKey = env('OMDB_API_KEY'); // Store API key in .env
        $response = Http::get("http://www.omdbapi.com/?t=" . urlencode($title) . "&apikey=" . $apiKey);

        if ($response->successful() && $response->json()['Response'] === "True") {
            $data = $response->json();

            $releaseDate = $data['release_date'] ?? null;

            if ($releaseDate && strtotime($releaseDate)) {
                try {
                    $releaseDate = Carbon::parse($releaseDate)->format('Y-m-d');
                } catch (Exception $e) {
                    $releaseDate = null; // If parsing fails, set NULL
                }
            } else {
                $releaseDate = null; // Set NULL if invalid
            }

            $imdbRating = $data['imdbRating'] ?? null; // Check if key exists
            $imdbRating = ($imdbRating === 'N/A') ? null : floatval($imdbRating); // Convert to float or set null

            $runtime = str_replace(" min", "", $data['Runtime']);
            $duration = $runtime ?? null; // Check if key exists
            $duration = ($duration === 'N/A') ? null : floatval($duration); // Convert to float or set null

            Movie::updateOrCreate(
                ['title' => $data['Title']], // Avoid duplicates
                [
                    'description' => $data['Plot'],
                    'rated' => $data['Rated'],
                    'imdbID' => $data['imdbID'],
                    'imdbRating' => $imdbRating,
                    'director' => $data['Director'],
                    'writer' => $data['Writer'],
                    'actors' => $data['Actors'],
                    'release_date' => $releaseDate,
                    'year' => $data['Year'],
                    'duration' => $duration,
                    'genre' => $data['Genre'],
                    'poster' => $data['Poster'],
                    'type' => 'movie', // You can modify this for TV shows or anime
                ]
            );

            $this->command->info("Inserted: " . $data['Title']);
        } else {
            $this->command->error("Failed to fetch: " . $title);
        }
    }
}
