<?php

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
    return view('guests.home');
})->name('home');

Route::get('/characters', function () {
    return view('guests.characters');
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('guests.comics', ["comics" => $comics]);
})->name('comics');

Route::get('/movies', function () {
    return view('guests.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('guests.tv');
})->name('tv');

Route::get('/games', function () {
    return view('guests.games');
})->name('games');

Route::get('/collectibles', function () {
    return view('guests.collectibles');
})->name('collectibles');

Route::get('/video', function () {
    return view('guests.video');
})->name('video');

Route::get('/fans', function () {
    return view('guests.fans');
})->name('fans');

Route::get('/news', function () {
    return view('guests.news');
})->name('news');

Route::get('/shop', function () {
    return view('guests.shop');
})->name('shop');