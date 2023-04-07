<?php

use App\Http\Controllers\animeController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\playerContoller;
use App\Http\Controllers\trendingController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/test', function () {
    return view('test.exmaple');
});


Route::get('/', [homeController::class, 'index'])->name('home.index');                  /* Handle Home */ 
Route::get('/watch/{every}', [playerContoller::class, 'index']);                        /* Handle Watching Page, Video Player  */ 
Route::get('/trending', [trendingController::class, 'index'])->name('trending.index');
Route::get('/anime', [animeController::class, 'index'])->name('anime.index');           /* Handle Anime */ 