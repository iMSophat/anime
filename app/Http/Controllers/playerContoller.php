<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class playerContoller extends Controller
{
    public function index()
    {
        return view('pages.watching');
    }
}
