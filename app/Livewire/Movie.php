<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Movie as MovieModel; // Import the Movie Eloquent model

class Movie extends Component
{
    public $title;
    public $year;
    public $movie;

    public function mount($title, $year)
    {
        // Extract title and year
        $this->title = str_replace(['+', '-'], ' ', $title);
        $this->year = $year;

        // Fetch movie details from the database
        $this->movie = MovieModel::where('title', 'like', "%{$this->title}%")
            ->where('year', $this->year)
            ->first();
    }

    public function render()
    {
        return view('livewire.movie', [
            'movie' => $this->movie
        ]);
    }
}
