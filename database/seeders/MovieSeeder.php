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
    public $titles = [
        // 2015
        "Mad Max: Fury Road",
        "The Revenant",
        "Star Wars: The Force Awakens",
        "Inside Out",
        "Jurassic World",
        "Furious 7",
        "The Martian",
        "Spectre",
        "Kingsman: The Secret Service",
        "The Hateful Eight",
        "Ex Machina",
        "Ant-Man",
        "Avengers: Age of Ultron",
        "Cinderella",
        "The Nice Guys",
        "Spy",
        "Sicario",
        "Room",
        "Bridge of Spies",
        "The Big Short",
        // 2016
        "Deadpool",
        "Zootopia",
        "La La Land",
        "Captain America: Civil War",
        "Rogue One: A Star Wars Story",
        "Arrival",
        "Hell or High Water",
        "Moana",
        "Doctor Strange",
        "Finding Dory",
        "Suicide Squad",
        "The Jungle Book",
        "Passengers",
        "Manchester by the Sea",
        "Lion",
        "Hidden Figures",
        "Hacksaw Ridge",
        "Nocturnal Animals",
        "Fences",
        "Independence Day: Resurgence",
        // 2017
        "Wonder Woman",
        "Spider-Man: Homecoming",
        "Get Out",
        "Dunkirk",
        "Logan",
        "Thor: Ragnarok",
        "Blade Runner 2049",
        "Coco",
        "Baby Driver",
        "Three Billboards Outside Ebbing, Missouri",
        "It",
        "Guardians of the Galaxy Vol. 2",
        "Kingsman: The Golden Circle",
        "Star Wars: The Last Jedi",
        "The Shape of Water",
        "Wonder",
        "Bright",
        "Logan Lucky",
        "The Disaster Artist",
        "The Greatest Showman",
        // 2018
        "Black Panther",
        "Avengers: Infinity War",
        "A Star Is Born",
        "Bohemian Rhapsody",
        "Mission: Impossible – Fallout",
        "Crazy Rich Asians",
        "Incredibles 2",
        "Green Book",
        "Roma",
        "Spider-Man: Into the Spider-Verse",
        "Venom",
        "Hereditary",
        "Vice",
        "First Man",
        "Mamma Mia! Here We Go Again",
        "The Nun",
        "If Beale Street Could Talk",
        "BlacKkKlansman",
        "Ready Player One",
        "Eighth Grade",
        // 2019
        "Avengers: Endgame",
        "Joker",
        "Parasite",
        "Knives Out",
        "Once Upon a Time in Hollywood",
        "Ford v Ferrari",
        "1917",
        "Little Women",
        "The Irishman",
        "Toy Story 4",
        "Frozen II",
        "Star Wars: The Rise of Skywalker",
        "It Chapter Two",
        "The Lighthouse",
        "Uncut Gems",
        "Midsommar",
        "Doctor Sleep",
        "The Farewell",
        "Scary Stories to Tell in the Dark",
        "Us",
        // 2020
        "Tenet",
        "The Invisible Man",
        "Sonic the Hedgehog",
        "Bad Boys for Life",
        "Wonder Woman 1984",
        "Birds of Prey",
        "Onward",
        "The Trial of the Chicago 7",
        "Mulan",
        "The Gentlemen",
        "Enola Holmes",
        "Borat Subsequent Moviefilm",
        "Hamilton",
        "The New Mutants",
        "Bloodshot",
        "Palm Springs",
        "The Old Guard",
        "Project Power",
        "Underwater",
        "Stuber",
        // 2021
        "Spider-Man: No Way Home",
        "Dune",
        "No Time to Die",
        "Shang-Chi and the Legend of the Ten Rings",
        "The Suicide Squad",
        "Black Widow",
        "Eternals",
        "Cruella",
        "Free Guy",
        "A Quiet Place Part II",
        "The French Dispatch",
        "Jungle Cruise",
        "Ghostbusters: Afterlife",
        "Raya and the Last Dragon",
        "The Green Knight",
        "Don't Look Up",
        "Licorice Pizza",
        "The Last Duel",
        "F9: The Fast Saga",
        "Space Jam: A New Legacy",
        // 2022
        "The Batman",
        "Top Gun: Maverick",
        "Everything Everywhere All at Once",
        "Avatar: The Way of Water",
        "Doctor Strange in the Multiverse of Madness",
        "Black Panther: Wakanda Forever",
        "Jurassic World Dominion",
        "Thor: Love and Thunder",
        "Elvis",
        "Nope",
        "Ambulance",
        "Bullet Train",
        "The Woman King",
        "The Fabelmans",
        "Don't Worry Darling",
        "After Yang",
        "Glass Onion: A Knives Out Mystery",
        "The Banshees of Inisherin",
        "The Northman",
        "See How They Run",
        // 2023
        "Oppenheimer",
        "Barbie",
        "Guardians of the Galaxy Vol. 3",
        "Mission: Impossible – Dead Reckoning Part One",
        "The Marvels",
        "John Wick: Chapter 4",
        "Spider-Man: Across the Spider-Verse",
        "Elemental",
        "Indiana Jones and the Dial of Destiny",
        "Fast X",
        "The Flash",
        "Asteroid City",
        "Dune: Part Two",
        "The Color Purple",
        "Poor Things",
        "Saltburn",
        "Killers of the Flower Moon",
        "The Killer",
        "The Boys in the Boat",
        "Next Goal Wins",
        // 2024
        "Mission: Impossible – Dead Reckoning Part Two",
        "Avatar 3",
        "Joker: Folie à Deux",
        "The Equalizer 3",
        "Fantastic Beasts 4",
        "Wicked",
        "Spider-Man: Beyond the Spider-Verse",
        "The Hunger Games: The Ballad of Songbirds and Snakes 2",
        "Indiana Jones 6",
        "The Matrix Resurrections 2",
        // 2025
        "Blade",
        "Captain America: New World Order",
        "Deadpool 3",
        "Guardians of the Galaxy Vol. 4",
        "The Marvels 2",
        "Thor: Love and Thunder 2",
        "Black Panther: Legacy",
        "Star Wars: New Dawn",
        "Jurassic World: Dominion 2",
        "Fast & Furious 11"
    ];
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // $titles = is_array($titles) ? $titles : [$titles]; // Ensure $titles is an array
        $type = 'movie';
        foreach ($this->titles as $title) {
            $apiKey = env('OMDB_API_KEY'); // Store API key in .env
            $url = "http://www.omdbapi.com/?plot=full&t=" . urlencode($title) . "&apikey=" . $apiKey;
            switch ($type) {
                case 'series':
                    $url .= "&type=series";
                    break;
                case 'movie':
                default:
                    $url .= "&type=movie";
                    break;
            }
            $response = Http::get($url);

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
                        'type' => $data['Type'], // You can modify this for TV shows or anime
                    ]
                );

                $this->command->info("Inserted: " . $data['Title']);
            } else {
                $this->command->error("Failed to fetch: " . $title);
            }
        }
    }
}
