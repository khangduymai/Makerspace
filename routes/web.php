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

// route -> string
Route::get('/string', function() {
    return 'Hello Khang from string';
});


// route -> view
Route::get('/route-view', function() {
    return view('route-view-sample');
});


// route -> controller -> view

// path variable in RESTful api
Route::get('/ctof/{c}', 'TemperatureController@calculateF');

