<?php

use App\Livewire\Movie;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('welcome');
Route::view('/pricing', 'pricing')->name('pricing');

Route::middleware(['auth'])->group(function () {
    Route::view('/home', 'dashboard')
        ->middleware(['verified'])
        ->name('dashboard');

    Route::get('/home/movies', function () {
        return 'Movies';
    })->name('movies');
    Route::get('/home/movie/{title}-{year}', Movie::class)->name('movie');
    Route::get('/home/series', function () {
        return 'Series';
    })->name('series');

    Route::get('/home/anime', function () {
        return 'Anime';
    })->name('anime');
    Route::get('/home/my-watchlist', function () {
        return 'WatchList';
    })->name('watchlist');

    Route::get('/home/search', function () {
        return 'Search';
    })->name('search');

    Route::get('/home/favourites', function () {
        return 'Favourites';
    })->name('favourites');

    Route::view('profile', 'profile')
        ->name('profile');
});


require __DIR__ . '/auth.php';
