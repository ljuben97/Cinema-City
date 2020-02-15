<?php

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

Route::resource('/theater', 'TheaterController');
Route::resource('movie', 'MoviesController');

Route::get('/theater/buyTickets/{tId}-{mId}', 'TheaterController@buyTickets')->name('theater.buyTickets');
Route::post('/theater/bought/{tId}-{mId}', 'TheaterController@bought')->name('theater.bought');
Route::get('/theater/addMovie/{id}', 'TheaterController@addMovie')->name('theater.addMovie');
Route::post('/theater/movieAdded/{id}', 'TheaterController@movieAdded')->name('theater.movieAdded');
