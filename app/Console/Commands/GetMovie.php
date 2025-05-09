<?php

namespace App\Console\Commands;

use App\Http\Controllers\searchTMDB;
use Illuminate\Console\Command;

class GetMovie extends Command
{
    protected $signature = 'get:movie {movie} {--series}';
    protected $description = 'Retrieve movie details from TMDb API';

    public function handle()
    {
        $query = urlencode($this->argument('movie'));
        $isSeries = $this->option('series');
        $isSeries = $this->option('series') ? true : false;

        $searchAPI = new searchTMDB();
        $results = $searchAPI->search($query,$isSeries);

        // Display basic movie details in the console
        // $this->info("Movie: " . $movie['title']);
        // $this->line("Release Date: " . $movie['release_date']);
        // $this->line("Overview: " . $movie['overview']);
        $this->info("Movie Details: ".$results);
        $this->line("------------------------------");


    }
}
