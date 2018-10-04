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

Route::get('/home', function () {
    return view('home.home');
});
Route::get('/events', 'EventsController@events');
Route::get('/careers', function () {
    return view('home.careers');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/calendar', function () {
    return view('home.calendar');
});
Route::get('/form', function () {
    return view('home.form');
});


