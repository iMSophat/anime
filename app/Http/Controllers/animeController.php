<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class animeController extends Controller
{
    public function index()
    {
        return view('pages.anime');
    }
}
