<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Movie as MovieModel;
use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class Movie extends Component
{

    public $title;
    public $year;
    public $movie;
    public $genres;

    protected $queryString = ['title', 'year']; // Enable query string

    public function mount()
    {
        // Redirect if no query string is provided
        if (!$this->title || !$this->year) {
            return redirect()->route('dashboard')->with('error', 'Invalid request.');
        }

        $decodedTitle = urldecode($this->title);
        $decodedYear = urldecode($this->year);
        // Fetch movie details from the database
        $this->movie = MovieModel::where('title', 'like', "%{$decodedTitle}%")
            ->where('year', $decodedYear)
            ->first();

        // If no movie is found, return a 404 error
        if (!$this->movie) {

            abort(HttpFoundationResponse::HTTP_NOT_FOUND, 'Movie not found');
        }
        // Fetch genres associated with the movie
        $this->genres = $this->movie->genres->pluck('name');
    }

    public function render()
    {
        return view('livewire.movie', [
            'movie' => optional($this->movie),
            'genres'=> optional($this->genres),
        ]);
    }
}
