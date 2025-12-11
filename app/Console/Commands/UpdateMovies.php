<?php

namespace App\Console\Commands;

use App\Http\Controllers\GetMovieNames;
use Illuminate\Console\Command;
use Database\Seeders\MovieSeeder;

class UpdateMovies extends Command
{
    protected $signature = 'movie:update
        {--year= : Fetch movies from a specific year}
        {--trending : Fetch trending movies}
        {--no_of_movies=10 : Number of movies to fetch}';

    protected $description = 'Fetch movies from OMDB API. Use the --year, --trending, and --no_of_movies options.';

    public function handle()
    {
        $year = $this->option('year');
        $trending = $this->option('trending');
        $noOfMovies = (int) $this->option('no_of_movies') ?: 10;

        $movieNames = [];

        if ($year || $trending) {
            $movieNames = new GetMovieNames()->getNames($year, $trending, $noOfMovies);
            $this->info($movieNames);

        }

        $seeder = new MovieSeeder();
        $seeder->setCommand($this); // Manually set the command

        $seeder->run();

        $this->info("Fetching series details for movies ");
        $this->info('Record added successfully!');
    }

    // Add a method to call Ollama Mistral (pseudo-code)
    // private function getMovieNamesFromOllama($year, $trending, $noOfMovies) {
    //     // Implement HTTP call to Ollama here and return array of movie names
    // }
}
