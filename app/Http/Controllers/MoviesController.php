<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CategoryDataTrait;

class MoviesController extends Controller
{
    use CategoryDataTrait;
    public function index()
    {
        $title = $category = $this->getCategoryName();
        $title = ucwords(str_replace('_', ' ', $title));
        $movies = $this->getContentFor('movie', $category);
        //dd($movies);
        $genres = $this->getGenresFor('movie');
        //dd($genres);
        return view('movies.index', [
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
