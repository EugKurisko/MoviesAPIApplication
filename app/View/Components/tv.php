<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class TV extends Component
{
    public $tvs;
    public $genres;
    public $title;

    public function __construct($tvs, $genres, $title)
    {
        $this->tvs = $tvs;
        $this->genres = $genres;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tv');
    }
}
