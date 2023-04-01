<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trendingController extends Controller
{
    public function indexTrending()
    {
        return view('trending.trending');
    }
}
