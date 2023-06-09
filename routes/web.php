<?php

use App\Http\Controllers\animeController;
use App\Http\Controllers\authController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\playerContoller;
use App\Http\Controllers\trendingController;
use App\Http\Controllers\wallpaperController;
use App\Http\Controllers\followingController;
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


Route::get('/', [homeController::class, 'index'])->name('home.index');                      /* Handle Home */ 
Route::get('/watch/{every}', [playerContoller::class, 'index']);                            /* Handle Watching Page, Video Player  */ 
Route::get('/trending', [trendingController::class, 'index'])->name('trending.index');
Route::get('/anime', [animeController::class, 'index'])->name('anime.index');               /* Handle Anime */ 
Route::get('/wallpaper', [wallpaperController::class, 'index'])->name('wallpaper.index');   /* Handle Anime */ 
Route::get('/category',[categoryController::class,'index'])->name('category.index');
Route::get('/following',[followingController::class,'index'])->name('following.index');

Route::get('/login',[authController::class,'index'])->name('login.index');
Route::get('/register', [authController::class, 'register'])->name('register.index');
Route::get('/otp', [authController::class, 'otp'])->name('otp.index');
