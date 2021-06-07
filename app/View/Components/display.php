<?php

namespace App\View\Components;

use Illuminate\View\Component;

class display extends Component
{
    /**
     * The alert type.
     *
     * @var array
     */
    public $popularMovies;
    public $title;
    /**
     * Create a new component instance.
     *
     * @param array $popularMovies
     * 
     * @return void
     */
    public function __construct($popularMovies, $title)
    {
        $this->popularMovies = $popularMovies;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.display'); //->with('popularMovies', $this->popularMovies);
    }
}
