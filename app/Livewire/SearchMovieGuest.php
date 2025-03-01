<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;

class SearchMovieGuest extends Component
{
    public $search = '';
    public $resultMovies = [];
    public function searchMovies()
    {
        $this->resultMovies = Movie::where('title', 'like', '%' . $this->search . '%')->select('poster','title','description','year')->get();
    }
    public function render()
    {
        return view('livewire.search-movie-guest', [
            'resultMovies' => $this->resultMovies
        ]);
    }
}
