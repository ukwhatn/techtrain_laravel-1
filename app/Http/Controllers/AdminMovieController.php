<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminMovieController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $movies = Movie::all();
        return view('admin/movies/list', ['movies' => $movies]);
    }
}
