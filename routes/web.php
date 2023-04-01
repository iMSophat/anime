<?php

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/test', function () {
    return view('test.exmaple');
});


Route::get('/watch/{every}', [playerContoller::class, 'index']);

Route::get('/trending', [trendingController::class, 'indexTrending'])->name('trending');