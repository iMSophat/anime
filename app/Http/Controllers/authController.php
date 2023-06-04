<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
	
	public function register()
	{
		return view('auth.register');
	}

	public function otp()
	{
		return view('auth.otp');
	}
}
