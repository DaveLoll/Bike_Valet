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

Route::Resource('/home', 'HomeController@index')->name('home');

Route::Resource('ParkedBike', 'ParkedBikeController');
Route::Resource('Event','EventController');
Route::Resource('Biker', 'BikerController');
Route::Resource('User', 'UserController');
Route::Resource('Organization', 'Organization');
Route::Resource('ValetEvent', 'ValetEventController');
Route::Get('/GetCheckoutInformation', 'ParkedBikeController@GetCheckoutInformation' );
