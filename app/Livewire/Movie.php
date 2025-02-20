<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Movie as MovieModel;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class Movie extends Component
{
    public $title;
    public $year;
    public $movie;

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
    }

    public function render()
    {
        return view('livewire.movie', [
            'movie' => optional($this->movie),
        ]);
    }
}
