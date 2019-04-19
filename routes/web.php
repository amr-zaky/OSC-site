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
    return view('blenderWorkshop');
});

Route::get('/event', function () {
    return view('eventPage');
});

Route::get('/Linux', function () {
    return view('Linux');
});
