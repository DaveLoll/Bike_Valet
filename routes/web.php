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
Route::get('/checkin', function () {
    return view('check-in');
});
Route::resource('Biker', 'BikerController');
Route::post('/bikerEvent', 'BikerController@createBikerAndCheckin');
Route::resource('Event', 'EventController');
Route::resource('ParkedBike', 'ParkedBikeController');
Route::post('/bikerInfo', 'BikerController@show');