<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PracticeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/practice', [PracticeController::class, 'sample']);
Route::get('/practice2', [PracticeController::class, 'sample2']);
Route::get('/practice3', [PracticeController::class, 'sample3']);

Route::get('/getPractice', [PracticeController::class, 'getPractice']);

# movies
Route::get('/movies', [MovieController::class, 'index']);

# admin/movies
Route::get('/admin/movies', [AdminMovieController::class, 'index']);
Route::get('/admin/movies/create', [AdminMovieController::class, 'create']);
Route::post('/admin/movies/store', [AdminMovieController::class, 'store']);
Route::get('/admin/movies/{id}/edit', [AdminMovieController::class, 'edit']);
Route::patch('/admin/movies/{id}/update', [AdminMovieController::class, 'update']);
Route::delete('/admin/movies/{id}/destroy', [AdminMovieController::class, 'destroy']);
