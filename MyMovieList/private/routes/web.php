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
Route::get('Admin', 'Admin\HomeController@index')->name('Admin');

Route::group(['middleware' => ['web']], function() {
	Route::resource('MovieList', 'Admin\MovieLsitController');
});

Route::group(['middleware' => ['web']], function() {
	Route::resource('ArtikelList', 'Admin\ArtikelController');
});

Route::group(['middleware' => ['web']], function() {
	Route::resource('homeuser', 'User\UserController');
});

Route::get('abouthome', 'Admin\HomeController@About')->name('AboutAdmin');

Route::get('/detailmovie/{id}', 'User\DetailMovieController@index')->name('Detail');
Route::get('/detailartikel/{id}', 'User\DetailMovieController@detailartikel')->name('DetailArtikel');

Route::get('/movie/{id}', 'Admin\MovieLsitController@destroy')->name('HapusMovie');
Route::get('/artikel/{id}', 'Admin\ArtikelController@destroy')->name('HapusArtikel');

Route::get('articleuser', 'User\ArtikelUserController@index')->name('Artikel');
Route::get('movielistuser', 'User\MovieListController@index')->name('MovieListt');
Route::get('aboutuser', 'User\AboutController@index')->name('About');
