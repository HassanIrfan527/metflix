<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $movieName = $request->input('query');
        $movies = Movie::where('title', 'like', "%{$movieName}%")->limit(10)->get();
        // dd($movies);
        return response()->json($movies);
    }
}
