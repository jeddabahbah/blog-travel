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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mountain', function () {
    return view('mountain');
});

Route::get('/sea', function () {
    return view('sea');
});

Route::get('/wf', function () {
    return view('wf');
});

Route::post('/contact-us', 'ContactController@addContact');
