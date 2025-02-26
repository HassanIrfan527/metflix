<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Database\Seeders\MovieSeeder;

class UpdateMovies extends Command
{
    // protected $signature = 'movie:update {title} {--series}';
    protected $signature = 'movie:update';

    protected $description = 'Fetch movies from OMDB API\nUse the --series flag to fetch TV series.';

    public function handle()
    {
        // $titles = $this->argument('title'); // Get the string argument
        // $isSeries = $this->option('series');
        $seeder = new MovieSeeder();
        $seeder->setCommand($this); // Manually set the command
        $seeder->run();
        $this->info("Fetching series details for movies ");
        $this->info('Record added successfully!');
    }
}
