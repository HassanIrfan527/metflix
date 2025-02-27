<?php

use App\Livewire\Movie;
use App\Livewire\Pricing;
use App\Livewire\SearchMovie;
use App\Models\Movie as ModelsMovie;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    $movie = ModelsMovie::select(['poster'])->inRandomOrder()->limit(1)->first();
    return view('welcome', ['randomMovie'=> $movie]);
})->name('welcome');
Route::get('/pricing', Pricing::class)->name('pricing');

Route::middleware(['auth'])->group(function () {
    Route::view('/home', 'auth.dashboard')
        ->middleware(['verified'])
        ->name('dashboard');

    Route::get('/home/movies', function () {
        return 'Movies';
    })->name('movies');

    Route::get('/home/movie', Movie::class)->name('movie');

    Route::get('/home/series', function () {
        return 'Series';
    })->name('series');

    Route::get('/home/anime', function () {
        return 'Anime';
    })->name('anime');

    Route::get('/home/my-watchlist', function () {
        return 'WatchList';
    })->name('watchlist');

    Route::get('/home/search', SearchMovie::class)->name('search');

    Route::get('/home/favourites', function () {
        return 'Favourites';
    })->name('favourites');

    Route::view('profile', 'auth.profile')
        ->name('profile');
});


require __DIR__ . '/auth.php';
