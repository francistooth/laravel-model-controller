<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $title = 'elenco film';
        return view('home', compact('movies', 'title'));
    }

    public function movieDetails($id){

        $movie = Movie::find($id);

        return view('movieDetails', compact('movie'));

    }
}
