<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Traits\CategoryDataTrait;

class TVController extends Controller
{
    use CategoryDataTrait;
    public function index()
    {
        $title = $category = $this->getCategoryName();
        $title = ucwords(str_replace('_', ' ', $title));
        $tvs = $this->getContentFor('tv', $category);
        //dd($tv);
        $genres = $this->getGenresFor('tv');
        //dd($genres);
        return view('tv.index', [
            'tvs' => $tvs,
            'genres' => $genres,
            'title' => $title
        ]);
    }
}
