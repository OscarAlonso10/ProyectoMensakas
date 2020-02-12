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
    return view('layout');
})->middleware('auth');

Route::get('/user', function () {
    return view('User');
});

Route::get('/business', function () {
    return view('Business');
});

Route::get('/menu', function () {
    return view('Menu');
});


Route::get('/orders', function () {
    return view('Orders');
});

Route::get('/deliver', function () {
    return view('Deliver');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user','UserController@index');