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

Route::get('/mainmenu', function () {
    return view('mainmenu');
});

Route::get('/drinksmenu', function () {
    return view('drinksmenu');
});

Route::get('/winelist', function () {
    return view('winelist');
});

Route::get('/kidsmenu', function () {
    return view('kidsmenu');
});
