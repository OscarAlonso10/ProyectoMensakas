<?php
use App\Business;
use App\Consumer;
use App\Deliverer;
use App\Order;
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

Route::get('/business/{idBusiness}', function ($idBusiness) {
    $business = Business::find($idBusiness);

    return view('business',["business"=>$business]);
})->middleware('auth');

Route::get('/consumer/{idConsumer}', function ($idConsumer) {
    $consumer = Consumer::find($idConsumer);

    return view('consumer',["consumer"=>$consumer]);
})->middleware('auth');

Route::get('/deliverer/{idDeliverer}', function ($idDeliverer) {
    $deliverer = Deliverer::find($idDeliverer);

    return view('deliverer',["deliverer"=>$deliverer]);
})->middleware('auth');

Route::get('/order/{idOrder}', function ($idOrder) {
    $order = Order::find($idOrder);

    return view('order',["order"=>$order]);
})->middleware('auth');

Route::get('/carrito', 'CarritoController@create')->name('carrito');
   
Route::get('/products', 'ProductosController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("business","BusinessController")->middleware('auth');

Route::resource("deliverer","MensakasController")->middleware('auth');

Route::resource("consumer","ConsumerController")->middleware('auth');

Route::resource("order","OrderController")->middleware('auth');
