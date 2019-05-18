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


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/eo', function () {
    return view('eo');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/ticket', function () {
    return view('ticket');
});
Route::get('/detail', function () {
    return view('detail_event');
});
Route::get('/event', function () {
    return view('event');
});

Route::get('/eo_home', function () {
    return view('eo/eo_home');
});

Route::get('/eo_createEvent', function () {
    return view('eo/eo_createEvent');
});

Route::get('/eo_login', function () {
    return view('eo/eo_login');
});


Route::get('/eo_register', function () {
    return view('eo/eo_register');
});

Route::get('/user_home', function () {
    return view('/user/home/base');
});

Route::get('/tiket', function () {
    return view('tiket');
});

Route::resource('/bayar', 'PembayaranController');

/** User */
Route::get('/bayar', 'UserController@index');
Route::get('/login', 'UserController@login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');

Route::post('/EORegist', 'EOController@EORegist');
Route::post('/CreateEvent','EventController@store');
Route::post('/EOLogin', 'EOController@EOlogin');
