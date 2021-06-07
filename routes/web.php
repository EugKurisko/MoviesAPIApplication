<?php

use App\Http\Controllers\MoviesController;
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

Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/upcoming', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/top-rated', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/now-playing', [MoviesController::class, 'index'])->name('movies.index');

// Route::resource('movies', MoviesController::class);//->names(['/upcoming' => 'movies.index']);
