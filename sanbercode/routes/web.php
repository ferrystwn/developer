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
/* link input database */
Route::post('/tambah', 'CastController@store');

/* link read data */
Route::get('/cast', 'CastController@index');
/* link detail */
Route::get('/cast/{cast_id}', 'CastController@show');
/* link edit */
Route::get('/cast/{cast_id}/edit', 'CastController@edit');
/* link update */
Route::put('/cast/{cast_id}', 'CastController@update');
/* link delete */
Route::delete('/cast/{cast_id}', 'CastController@destroy');