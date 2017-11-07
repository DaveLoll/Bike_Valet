<?php

/*
 * Filename:     web.php
   Creator:      Laravel
   Create Date:  20171010
   Purpose:      Laravel's page that routes to views
   Log:
                 20171024:     In addition to normal routes for the pages I created, set up Routes to middleware so that
                               only logged-in users can set a password (after new user logs in using generated password they can
                               reset a password.  Also, only users with a passowrd can access the Welcome screen
                               idea from:https://stackoverflow.com/questions/42474057/laravel-5-4-create-password-on-first-login//AC
 */
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

Auth::routes();

Route::get('/', function () {
    return view('Auth/login');
});

Route::get('/example', function () {
    return view('example');
});

Route::get('/splash', function () {
    return view('splash');
});

Route::get('/selectEvent', 'EventController@selectEventIndex');
//Route::resource('selectEvent', 'ValetEventController');
//Route::resource('selectEvent', 'EventController');
Route::post('/selectEvent', 'ValetEventController@selectEvent');

Auth::routes();

Route::post('/bikerEvent', 'BikerController@createBikerAndCheckin');
Route::resource('ParkedBike', 'ParkedBikeController');
Route::Get('/ListBikes', 'ParkedBikeController@getCheckedInBikers');
Route::Post('/splash', 'ParkedBikeController@UpdateStatus');
Route::Resource('Event','EventController');
Route::Resource('Biker', 'BikerController');
Route::Resource('User', 'UserController');
Route::Resource('Organization', 'Organization');
Route::Resource('ValetEvent', 'ValetEventController');
Route::get('/volunteer-welcome', function () {
    return view('volunteer-welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/checkin', function () {
    return view('check-in');
});
Route::post('/bikerEvent', 'BikerController@createBikerAndCheckin');
Route::post('/bikerInfo', 'BikerController@show');
