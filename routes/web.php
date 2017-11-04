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

Route::get('/example', function () {
    return view('example');
});

Route::get('/splash', function () {
    return view('splash');
});

Route::get('/selectEvent', 'EventController@selectEventIndex');
Route::post('/selectEvent', 'ValetEventController@selectEvent');

Auth::routes();

Route::resource('Biker', 'BikerController');
Route::post('/bikerEvent', 'BikerController@createBikerAndCheckin');
Route::resource('ParkedBike', 'ParkedBikeController');
