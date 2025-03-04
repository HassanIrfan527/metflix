<?php

use App\Http\Controllers\APIController;
use App\Livewire\AnimePage;
use App\Livewire\Movie;
use App\Livewire\Pricing;
use App\Livewire\SearchMovie;
use App\Models\Movie as MovieModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome')->name('welcome');
Route::get('/pricing', Pricing::class)->name('pricing');
Route::get('/movie', function (Illuminate\Http\Request $request) {
    $movieName = urldecode($request->query('title'));
    $movieYear = urldecode($request->query('year'));
    $movie = MovieModel::where('title', $movieName)->where('year', $movieYear)->first();
    $genres = $movie->genres->pluck('name');
    return view('movie-guest', ['movie' => $movie, 'genres' => $genres]);
})->name('guest.movie');


// Search route

Route::middleware(['auth'])->group(function () {
    Route::view('/home', 'auth.dashboard')
        ->middleware(['verified'])
        ->name('dashboard');

    Route::get('/home/movies', function () {
        return 'Movies';
    })->name('movies');

    Route::get('/home/movie', Movie::class)->name('movie');

    Route::get('/home/friends', function () {
    $users = App\Models\User::select('name')
        ->where('id', '!=', Auth::id())
        ->get();
    $friends = Auth::user()->friends;
    return view('auth.friends', ['users' => $users, 'friends' => $friends]);
    })->name('auth.friends');

    Route::get('/home/series', function () {
        return 'Series';
    })->name('series');

    Route::get('/home/anime', AnimePage::class)->name('anime');

    Route::get('/home/my-watchlist', function () {
        $user = Auth::user();
        $watchlist = $user->watchlist;
        return view('auth.watchlist', ['watchlist' => $watchlist]);
    })->name('watchlist');

    Route::get('/home/search', SearchMovie::class)->name('search');

    Route::get('/home/favourites', function () {
        return 'Favourites';
    })->name('favourites');

    Route::view('profile', 'auth.profile')
        ->name('profile');
});


// API Endpoints
Route::post('/search', [APIController::class,'search'])->name('post.search');

Route::prefix('api')->middleware(['auth'])->group(function () {
    Route::post('/watchlist',[APIController::class,'getWatchlist'])->name('api.watchlist');
});

require __DIR__ . '/auth.php';
