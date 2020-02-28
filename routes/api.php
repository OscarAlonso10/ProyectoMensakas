<?php

use Illuminate\Http\Request;
use App\Business;
use App\Product;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/business', function () {
	$business = Business::all();
    return response()->json([
        'message' => 'OK!',
        'status' => 'OK!',
        'business' => $business
    ]);
});

Route::get('/business/{zipcode}', function ($zipcode) {
	$business = Business::where('zipcode','=', $zipcode)->get();
    return response()->json([
        'message' => 'OK!',
        'status' => 'OK!',
        'business' => $business
    ]);
});

Route::get('/product/{idBusiness}', function ($idBusiness) {
	$product = Product::where('fk_business_id','=', $idBusiness)->get();
    return response()->json([
        'message' => 'OK!',
        'status' => 'OK!',
        'product' => $product
    ]);
});