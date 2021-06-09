<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TVController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

// trait defineCaregory
// {
//     public function getSetOfData()
//     {
//         $url = explode('/', url()->current());
//         $category = end($url);
//         $title = $category = match ($category) {
//             'movies' => 'popular',
//             'top-rated' => 'top_rated',
//             'now-playing' => 'now_playing',
//             default => $category
//         };

//         $title = ucwords(str_replace('_', ' ', $title));
//         $movies = Http::withToken(config('services.tmdb.token'))
//             ->get("https://api.themoviedb.org/3/movie/$category")
//             ->json()['results'];

//         //get genres
//         $genres = Http::withToken(config('services.tmdb.token'))
//             ->get("https://api.themoviedb.org/3/genre/movie/list")
//             ->json()['genres'];
//     }
// }
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

Route::get('/movies/{category?}', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/upcoming', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/top-rated', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/now-playing', [MoviesController::class, 'index'])->name('movies.index');

Route::get('/tv', [TVController::class, 'index'])->name('tv.index');
Route::get('/tv/airing-today', [TVController::class, 'index'])->name('tv.index');
Route::get('/tv/airing-on-the-air', [TVController::class, 'index'])->name('tv.index');
Route::get('/tv/top-rated', [TVController::class, 'index'])->name('tv.index');
