<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('/', 'MainController');

Route::resource('client', 'ClientController');

// Route::resource('clients', 'clients');

Route::resource('print', 'PrintController@index');

Route::resource('web', 'WebController@index');


Route::get('management', function () {
    return view('pages.project_management');
});

Route::resource('print', 'PrintController@index');

Route::resource('web', 'WebController@index');

Route::resource('contact', 'ContactController');