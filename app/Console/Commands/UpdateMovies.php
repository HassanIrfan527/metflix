<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Database\Seeders\MovieSeeder;

class UpdateMovies extends Command
{
    protected $signature = 'movies:create {title}';
    protected $description = 'Fetch and update movies from OMDB API';

    public function handle()
    {
        $title = $this->argument('title'); // Get the string argument

        $this->info("Sending request with: $title");

        $seeder = new MovieSeeder();
        $seeder->setCommand($this); // Manually set the command
        $seeder->run($title);

        $this->info('Movies updated successfully!');
    }
}
