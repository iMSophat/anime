<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\loginModel;
use Illuminate\Http\Request;

class loginController extends Controller
{
    /**
     * Registration
     */
    public function register(Request $request)
    {
        dd($request->all());
        $this->validate($request, [
            'name'      => ['required','min:4'],
            'email'     => ['required','email'],
            'password'  => ['required','min:8','max:15','regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'],
        ]);
 
        $user = loginModel::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'image'     => $request->image,
            'password'  => md5($request->password),
        ]);
       
        $token = $user->createToken('Token')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }

    /**
     * Login
    */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }   
}
