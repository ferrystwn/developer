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

Route::get('/', 'IndexController@home');
Route::get('/form', 'AuthController@form');
Route::post('/final', 'AuthController@final');
Route::get('/data-table', 'IndexController@table');


/* input cast */
/* link form add */
Route::get('cast/create', 'CastController@create');
Route::get('film/create', 'FilmController@create');
/* link input database */
Route::post('/tambah', 'CastController@store');
Route::post('/add_film', 'FilmController@store');

/* link read data */
Route::get('/cast', 'CastController@index');
Route::get('/film', 'FilmController@index');
/* link detail */
Route::get('/cast/{cast_id}', 'CastController@show');
Route::get('/film/{film_id}', 'FilmController@show');
/* link edit */
Route::get('/cast/{cast_id}/edit', 'CastController@edit');
Route::get('/film/{film_id}/edit', 'FilmController@edit');
/* link update */
Route::put('/cast/{cast_id}', 'CastController@update');
Route::put('/film/{film_id}', 'FilmController@update');
/* link delete */
Route::delete('/cast/{cast_id}', 'CastController@destroy');
Route::delete('/film/{film_id}', 'FilmController@destroy');
/* AUTH */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
