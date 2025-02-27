<?php

use App\Livewire\AnimePage;
use App\Livewire\Movie;
use App\Livewire\Pricing;
use App\Livewire\SearchMovie;
use App\Models\Movie as ModelsMovie;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome')->name('welcome');
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

    Route::get('/home/anime', AnimePage::class)->name('anime');

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
