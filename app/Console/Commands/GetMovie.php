<?php

// namespace App\Console\Commands;

// use Illuminate\Console\Command;
// use Illuminate\Support\Facades\Http; // For making HTTP requests (Laravel 7+)

// class GetMovie extends Command
// {
//     protected $signature = 'get:movie {movies* : One or more movie names}';
//     protected $description = 'Retrieve movie details from TMDb API';

//     // Set your TMDb API key (consider moving this to config or .env)
//     protected $tmdbApiKey = env('TMDB_API_ACCESS_TOKEN');

//     public function handle()
//     {
//         $movies = $this->argument('movies');

//         foreach ($movies as $movieName) {
//             // Optionally, URL-encode the movie name if needed
//             $encodedName = urlencode($movieName);

//             // Call TMDb API to search for the movie with headers
//             $response = Http::withHeaders([
//                 'Authorization' => 'Bearer ' . $this->tmdbApiKey,
//                 'Accept' => 'application/json',
//             ])->get("https://api.themoviedb.org/3/authentication");

//             if ($response->successful()) {
//                 $data = $response->json();

//                 if (empty($data['results'])) {
//                     $this->warn("No results found for '{$movieName}'.");
//                     continue;
//                 }

//                 // For demonstration, use the first result
//                 $movie = $data['results'][0];

//                 // Display basic movie details in the console
//                 $this->info("Movie: " . $movie['title']);
//                 $this->line("Release Date: " . $movie['release_date']);
//                 $this->line("Overview: " . $movie['overview']);
//                 $this->line("------------------------------");
//             } else {
//                 $this->error("Failed to retrieve data for '{$movieName}'.");
//             }
//         }

//         return 0;
//     }
// }
