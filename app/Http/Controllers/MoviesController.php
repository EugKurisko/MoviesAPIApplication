<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get movie categoty
        $url = explode('/', url()->current());
        $category = end($url);
        $title = 'Popular Movies';
        $title = $category = match ($category) {
            'movies' => 'popular',
            'top-rated' => 'top_rated',
            'now-playing' => 'now_playing',
            default => $category
        };

        $title = ucwords(str_replace('_', ' ', $title));
        $movies = Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/movie/$category")
            ->json()['results'];

        //get genres
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/genre/movie/list")
            ->json()['genres'];

        return view('pages.show', [
            'movies' => $movies,
            'genres' => $genres,
            'title' => $title
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
