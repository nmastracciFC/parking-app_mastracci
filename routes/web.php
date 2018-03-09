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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/garages/all', 'GarageController@index');

Route::get('/php/garages','ParkingController@index');
Route::post('/php/garages','ParkingController@store');
Route::get('php/garage/ticket', 'ParkingController@show');

