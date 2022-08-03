<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FoodController;
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
    return redirect('food');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('food', FoodController::class);
Route::resource('comment', CommentController::class);
Route::resource('foods.comment', CommentController::class)->shallow();

Route::post('/foods/{food:id}')->name('foods_store');
Route::delete('/foods/{food:id}')->name('foods_destroy');
