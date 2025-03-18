<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function search(Request $request)
    {
        $movieName = $request->input('query');
        $movies = Movie::where('title', 'like', "%{$movieName}%")->limit(10)->get();
        // dd($movies);
        return response()->json($movies);
    }

    public function getWatchlist(Request $request)
    {
        $validated = $request->validate([
            'movie_id' => 'required|integer',
            'action' => 'required|in:add,remove,check,get',
        ]);

        // User validation
        if (!$request->user()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $movie = Movie::find($validated['movie_id']);
        $user = $request->user();
        $watchlist = $user->watchlist;
        $isInWatchlist = $watchlist->contains($movie->id);
        // dd($isInWatchlist);

        if($validated['action'] == 'check'){
            return response()->json([
                'is_in_watchlist' => true,
            ]);
        }

        return response()->json([
            'watchlist' => $watchlist,
            'is_in_watchlist' => $isInWatchlist,
        ]);
    }
}
