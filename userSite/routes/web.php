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


Route::get('/exoplanets', 'HomeController@exoplanet');

Route::get('/stars', 'HomeController@stars');

Route::get('/solar_systems', 'HomeController@solar_system');

Route::get('/galaxies', 'HomeController@galaxies');
Route::get('/obj', function () {
    return view('object');
});
