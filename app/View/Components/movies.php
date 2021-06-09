<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Movies extends Component
{
    public $movies;
    public $title;
    public $genres;

    public function __construct($movies, $title, $genres)
    {
        $this->movies = $movies;
        $this->title = $title;
        $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movies');
    }
}
