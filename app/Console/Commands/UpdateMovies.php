<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Database\Seeders\MovieSeeder;

class UpdateMovies extends Command
{
    protected $signature = 'movies:update';
    protected $description = 'Fetch and update movies from OMDB API';

    public function handle()
    {
        $seeder = new MovieSeeder();
        $seeder->setCommand($this); // Manually set the command
        $seeder->run();

        $this->info('Movies updated successfully!');
    }
}
