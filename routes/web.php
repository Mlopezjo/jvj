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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@returning')->name('home');

Route::resource('/roles', 'RoleController');
Route::resource('/villes', 'VilleController');
Route::resource('/users', 'UserController');
Route::resource('/games', 'GameController');
Route::resource('/genres', 'GenreController');
Route::resource('/platforms', 'PlateformController');
Route::resource('/societes', 'SocieteController');

Route::get('/maliste', 'GameController@mygame');
Route::post('/games/add/{game}', 'GameController@add')->name('frontend.games.add');
Route::post('/games/remove/{game}', 'GameController@remove')->name('frontend.games.remove');

Auth::routes();


