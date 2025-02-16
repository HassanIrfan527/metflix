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
    public function run()
    {
        // Example movie titles
        // $movies = [
        //     // 2024 Releases
        //     "John Wick: The Rise of Power",
        //     "The Book of Clarence",
        //     "Smile 2",
        //     "The Lord of the Rings: The War of Rohirrim",
        //     "Speak No Evil",
        //     "Spooky Jack",
        //     "W.I.L.D.",
        //     "Night Swim",
        //     "Roundup",
        //     "Bubble 2",
        //     "Terrifier 3",
        //     "Inspector Gadget",
        //     "Twisters",
        //     "Argylle",
        //     "The Tiger's Apprentice",
        //     "Hitpig",
        //     "Joker: Folie à Deux",
        //     "Mufasa: The Lion King",
        //     "Transformers X G.I. Joe",
        //     "Horizon: An American Saga - Chapter 1",
        //     "Captain America: Brave New World",
        //     "Kingdom of the Planet of the Apes",
        //     "Futurama: Journey to the Universe",
        //     "Alvin and the Chipmunks: The Munk-Up",
        //     "Norm of the North: The Great Jungle Escapade",
        //     "Imaginary",
        //     "Madame Web",
        //     "Despicable Me 4",
        //     "The Secret Life of Pets 3",
        //     "Kraven - The Hunter",
        //     "Sing 3",
        //     "SHOGUN",
        //     "The Amateur",
        //     "Nessie",
        //     "Transformers One",
        //     "Smallfoot 2",
        //     "Ice Age: Landscape Damage",
        //     "King Julien",
        //     "Alto Knights",
        //     "Sleeping Beauty",
        //     "Mean Girls",
        //     "McKenzie and the Night",
        //     "Mr. Peabody & Sherman 2",
        //     "The Happytime Murders 2",
        //     "Robots: The Adventure Returns",
        //     "My Life as a Leviathan Girl",
        //     "The Emperor's New Groove",
        //     "Ghostbusters: Frozen Empire",
        //     "Penguins of Madagascar: Dave's Return",
        //     "Spider-Woman: Girls of Spider-Female",
        //     "The Ministry of Ungentlemanly Warfare",
        //     "Winnie The Pooh: Blood and Honey 2",
        //     "Madagascar 4",
        //     "The Bad Guys 2",
        //     "Dirty Dancing",
        //     "Kung Fu Panda 4",
        //     "Lyle, Lyle Crocodile 2",
        //     "The Boss Baby 3",
        //     "Thunderbolts",
        //     "Lilo & Stitch",
        //     "Lightyear 2",
        //     "Gladiator 2",
        //     "Saw XI",
        //     "Luck 2",
        //     "The Metroid Movie",
        //     "DC League of Super-Pets 2",
        //     "Paws of Fury 2: The Legend Returns",
        //     "Robo-Scrat: A Robots Movie",
        //     "My Spy: The Eternal City",
        //     "The Thundermans Return",
        //     "Ponyo",
        //     "Dune 2",
        //     "Beetlejuice 2",
        //     "The Animaniacs Movie",
        //     "Snow Day 2",
        //     "Johnny English 4",
        //     "Bad Boys 4",
        //     "Black Adam 2",
        //     "It Ends With Us",
        //     "Challengers",
        //     "The Beekeeper",
        //     "Maleficent 3",
        //     "Deadpool 3",
        //     "Hoodwinked 3!",
        //     "Sausage Party 2",
        //     "Peter Rabbit 3",
        //     "The Mean One 2",
        //     "The Legend of Zelda Movie",
        //     "The Last Airbender 2",
        //     "El Muerto",
        //     "The First Omen",
        //     "Ice Age: The Herd Returns",
        //     "Borderlands",
        //     "The Bob's Burgers Movie 2",
        //     "The Fall Guy",
        //     "Harold and The Purple Crayon",
        //     "Bob Marley: One Love",
        //     "Mean Girls: The Musical",
        //     "Godzilla X Kong: The New Empire",
        //     "Spider-Man: Beyond the Spider-Verse",
        //     "The Amazing World of Gumball: The Movie",
        //     "IF",
        //     "FURIOSA: A Mad Max Saga",
        //     "The Garfield Movie",
        //     "Cloverfield 4",
        //     "Masters of the Air",
        //     "Boats 2: Cruise Control",
        //     "Mickey 17",
        //     "Mad Max 5",
        //     "Bumblebee 2",
        //     "Dr. Seuss' The Cat In The Hat",
        //     "My Life as a B-Bot",
        //     "Transformers: Mirage",
        //     "Mickey's Mouse Trap",
        //     "Memory",
        //     "NOPE 2",
        //     "Echo",
        //     "Toto",
        //     "Zoom X Spy Kids",
        //     "Lisa Frankenstein",
        //     "Futurama: Universe Rocks",
        //     "Spies In Disguise X Ron's Gone Wrong",
        //     "Wendell and Wild 2",
        //     "Inside Out 2",
        //     "Onward 2",
        //     "Escape from Hat",
        //     "Wicked: Part One",
        //     "Spies In Disguise 2",
        //     "Rayman Legends",
        //     "Wonder Park 2",
        //     "Transformers: A New Generation",
        //     "The Lego Movie 3: The Third Part",
        //     "Ice Age: Scrat's Holiday Special",
        //     "UglyDolls 2: Return of UglyVille",
        //     "Kick Buttowski: The 3-D Movie",
        //     "Frankenstein Solo: A Hotel Transylvania Story",
        //     "Friendship Through The Ages: A MLP: EG Movie",
        //     "The Ice Age Adventures of Scrat",
        //     "Horizon: An American Saga - Chapter 2",
        //     "The SpongeBob Movie: It's a Wonderful Sponge",
        //     "The Emoji Movie 2: Dawn of The Internet",
        //     "Ralph's Outside World",
        //     "Mission Impossible: Dead Reckoning - Part Two",
        //     "Saving Bikini Bottom: The Sandy Cheeks Movie",
        //     "The Willoughbys Return",
        //     "My Ex-Friend's Wedding",
        //     "Pokémon: Detective Pikachu 2",
        //     "Spider-Man: Miles Morales",
        //     "Over The Moon 2",
        //     "Chuck's Choice: The Movie",
        //     "The Ugly Duckling and Me 3!",
        //     "Sonic The Hedgehog 3",
        //     "A Quiet Place: Day One",
        //     "HHPAY: The Movie",
        //     "Mortal Kombat 2",
        //     "Imaginary Friends",

        //     // 2025 Releases
        //     "Captain America: Brave New World",
        //     "Paddington in Peru",
        //     "Kinda Pregnant",
        //     "Becoming Led Zeppelin",
        //     "Bring Them Down",
        //     "Heart Eyes",
        //     "Love Hurts",
        //     "Marcella Mio",
        //     "No Other Land",
        //     "Parthenope",
        //     "The Witcher: Sirens of the Deep",
        //     "La Dolce Villa",
        //     "Armand",
        //     "In the Lost Lands",
        //     "Mickey 17",
        //     "Night of the Zoopocalypse",
        //     "On Becoming a Guinea Fowl",
        //     "Plankton: The Movie",
        //     "Queen of the Ring",
        //     "Shiver Me Timbers",
        //     "Screamboat",
        //     "A Minecraft Movie",
        //     "Parvulos",
        //     "The Amateur",
        // ];
        $movies = [
            // 2015 Releases
            "Star Wars: The Force Awakens",
            "Jurassic World",
            "Furious 7",
            "Mad Max: Fury Road",
            "The Martian",
            "Inside Out",
            "Avengers: Age of Ultron",
            "Minions",

            // 2016 Releases
            "Captain America: Civil War",
            "Rogue One: A Star Wars Story",
            "Deadpool",
            "La La Land",

            // 2017 Releases
            "Wonder Woman",
            "Dunkirk",
            "Spider-Man: Homecoming",
            "Star Wars: The Last Jedi",

            // 2018 Releases
            "Avengers: Infinity War",
            "Black Panther",
            "Incredibles 2",
            "Mission: Impossible – Fallout",

            // 2019 Releases
            "Avengers: Endgame",
            "Joker",
            "Spider-Man: Far From Home",
            "Parasite",

            // 2020 Releases
            "Tenet",
            "Soul",

            // 2021 Releases
            "Spider-Man: No Way Home",
            "Dune",
            "No Time to Die",
            "Shang-Chi and the Legend of the Ten Rings",

            // 2022 Releases
            "Top Gun: Maverick",
            "Avatar: The Way of Water",
            "The Batman",
            "Doctor Strange in the Multiverse of Madness",
            "Everything Everywhere All at Once",

            // 2023 Releases
            "Spider-Man: Across the Spider-Verse",
            "The Super Mario Bros. Movie",
            "Oppenheimer",
            "Barbie",

            // 2024 & 2025ing or recently released)
            "Inside Out 2",
            "Sonic the Hedgehog 3",
            "Captain America: Brave New World",
            "Ne Zha 2"
        ];


        foreach ($movies as $title) {
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
}
