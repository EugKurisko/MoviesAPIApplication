<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Http;

trait CategoryDataTrait
{
    public function getCategoryName()
    {
        $url = explode('/', url()->current());
        $category = end($url);
        $category = match ($category) {
            'tv' => 'popular',
            'movies' => 'popular',
            'airing-today' => 'airing_today',
            'airing-on-the-air' => 'on_the_air',
            'top-rated' => 'top_rated',
            'now-playing' => 'now_playing',
            default => $category
        };
        return $category;
    }

    public function getContentFor(string $content, string $category)
    {
        return Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/$content/$category")
            ->json()['results'];
    }

    public function getGenresFor(string $content)
    {
        return Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/genre/$content/list")
            ->json()['genres'];
    }
}
