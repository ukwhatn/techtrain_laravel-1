<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $movies = Movie::all();
        return view('movies/list', ['movies' => $movies]);
    }
}
