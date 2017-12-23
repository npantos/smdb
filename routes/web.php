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

Route::get('/', 'MoviesController@index')->name('movies');
Route::get('/movies', 'MoviesController@index')->name('movies');
Route::get('/movies/create', 'MoviesController@create')->name('create');
Route::post('/movies', 'MoviesController@store')->name('store');
Route::get('/movies/{id}', 'MoviesController@show')->name('movies');
Route::post('/comments', 'CommentsController@comments')->name('comments');