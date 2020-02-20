<?php
use App\Business;
use App\Consumer;
use App\Deliverer;
use App\Order;
use App\Product;
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


Route::get('/layout', function () {
    return view('layout');
})->middleware('auth');


Route::get('/client', function () {
    return view('client');
});

Route::post('/businessForLocation', function () {
    return  view('businessForLocation');
});

Route::get('/businessForLocation', function () {
    return view('businessForLocation')->name("hola");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("business","BusinessController")->middleware('auth');

Route::resource("deliverer","MensakasController")->middleware('auth');

Route::resource("consumer","ConsumerController")->middleware('auth');

Route::resource("order","OrderController")->middleware('auth');

Route::resource("product","ProductController")->middleware('auth');

Route::resource("product_category","Product_CategoryController")->middleware('auth');

Route::resource("business_category","Business_CategoryController")->middleware('auth');

Route::resource("pack","PackController")->middleware('auth');


Route::get('/simulator', 'SimulatorController@index')->name('simulator');
//registro consumer redirect simulator 2
Route::post('/simulatorbusiness', 'SimulatorController@store')->name('simulatorbusiness');

Route::get('/simulatorproduct', 'SimulatorController@product')->name('simulatorproduct');

Route::get('/productBusiness', 'ProductBusinessController@index')->name('simulator');

//business
Route::get('/selectbusiness', 'SimulatorBusinessController@index')->name('selectbusiness');

