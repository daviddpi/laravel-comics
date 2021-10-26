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
    return view('home');
})->name("home");

Route::get('/characters', function () {
    return view('characters');
})->name("personaggi");

Route::get('/comics', function () {
    return view('comics', ['comics_links' => config('comics')] );
})->name("fumetti");

Route::get('/movies', function () {
    return view('movies');
})->name("film");

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name("giochi");

Route::get('/collectibles', function () {
    return view('collectibles');
})->name("collezionabili");

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/single_comic', function () {
    return view('single_comic');
})->name('comic');
