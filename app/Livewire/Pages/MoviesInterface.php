<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Movie;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class MoviesInterface extends Component
{
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'director' => 'required|string|max:255',
    //         'release_date' => 'required|date',
    //         'duration' => 'required|integer',
    //         'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    //         'genre' => 'required|string|max:255',
    //         'trailer' => 'nullable|url',
    //         'classification' => 'required|string|max:255',
    //     ]);

    //     $path = $request->file('cover_image')->store('movies', 'public');

    //     $validated['cover_image'] = $path;

    //     Movie::create($validated);

    //     return redirect()->route('movies.index')->with('success', 'Movie added successfully!');
    // }

    public function render()
    {
        $movies = Movie::inRandomOrder()->select('poster', 'title', 'year', 'imdbRating','director','duration')->take(25)->get();
        return view(
            'livewire.pages.movies-interface',
            ['movies' => $movies]
        );
    }
}
