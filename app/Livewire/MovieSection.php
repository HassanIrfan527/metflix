<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;

class MovieSection extends Component
{

    public function render()
    {
        $movies = Movie::all();
        return view(
            'livewire.movie-section',
            ['movies' => $movies]
        );
    }
}
