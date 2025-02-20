<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function ratingStars($vote)
    {
        $fullStar = '<i class="fa fa-star"></i>';
        $empty = '<i class="fa fa-star-o"></i>';
        $result = '';
        for ($i = 1; $i <= $vote; $i++) {
            if ($i <= $vote) {
                $result .= $fullStar;
            } else {
                $result .= $empty;
            }
        }
        return $result;
    }

    public function index()
    {
        $movies = Movie::all();


        return view('welcome', compact('movies'));
    }
}
