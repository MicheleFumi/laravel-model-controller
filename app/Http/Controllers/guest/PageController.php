<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{


    public function index()
    {
        $movies = Movie::all();

        return view('welcome', compact('movies'));
    }
}
