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
