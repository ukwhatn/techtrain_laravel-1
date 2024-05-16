<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminMovieController extends Controller
{
    public function index(): View
    {
        $movies = Movie::all();
        return view('admin/movies/list', ['movies' => $movies]);
    }

    public function create(): View
    {
        return view('admin/movies/create');
    }

    public function store(Request $request): RedirectResponse
    {
        // バリデーション
        $validatedData = $request->validate([
            'title' => 'required|unique:movies|max:255',
            'image_url' => 'required|url',
            'published_year' => 'required|integer',
            'is_showing' => 'boolean',
            'description' => 'required',
        ]);

        $movie = new Movie();
        $movie->title = $validatedData['title'];
        $movie->image_url = $validatedData['image_url'];
        $movie->published_year = $validatedData['published_year'];
        $movie->is_showing = $validatedData['is_showing'] ?? false;
        $movie->description = $validatedData['description'];
        $movie->save();

        return redirect('/admin/movies');
    }
}
