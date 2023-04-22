<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trendingController extends Controller
{
    public function index()
    {
        return view('pages.trending');
    }
}
