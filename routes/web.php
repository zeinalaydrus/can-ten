<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customer/histories', function () {
});

Route::get('/customer/carts', function () {
})->middleware("role:customer");

Route::get('/customer/histories', function () {
});
Route::get('/customer/profile', function () {
});

Auth::routes();

<<<<<<< HEAD
Route::post('/review-store/{food:id}', [FoodController::class, 'reviewstore'])->name('review.store');
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 61d8407d107bfc50a0cb0b1883525fae18c599a0
