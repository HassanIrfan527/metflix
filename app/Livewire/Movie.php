<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Movie as MovieModel;
// use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
class Movie extends Component
{

    public $title;
    public $year;
    public $movie;
    public $genres;
    public $addedToWatchlist = true;
    protected $queryString = ['title', 'year']; // Enable query string

    private function isAddedToWatchlist(MovieModel $movie)
    {
        $movieId = $movie->id;
        $response = Http::post(route('api.watchlist'), [
            'movie_id' => $movieId,
            'action' => 'check',
        ]);
        if ($response->json('is_in_watchlist')) {
            // dd($response->json('is_in_watchlist'));
            return true;
        }

        return false;
    }
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

        $this->addedToWatchlist = $this->isAddedToWatchlist($this->movie);
        // dd($this->addedToWatchlist);
    }

    public function render()
    {
        return view('livewire.movie', [
            'movie' => optional($this->movie),
            'genres' => optional($this->genres),
        ]);
    }
}
