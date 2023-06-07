<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class followingController extends Controller
{
    // show view for following
    public function index()
    {
        return view('following.index');
    }
}
