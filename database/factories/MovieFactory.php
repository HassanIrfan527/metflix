<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Avengers: Infinity War',
            'description' => 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation puts an end to the universe.',
            'director' => 'Anthony and Joe Russo',
            'release_date' => '2018-04-27',
            'duration' => 149,
            'cover_image' => 'movies/avengers_infinity_war.jpg', // Ensure this path matches your storage
            'trailer' => 'https://www.youtube.com/watch?v=6ZfuNTqbHE8',
        ];
    }
}
