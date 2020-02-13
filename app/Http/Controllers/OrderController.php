<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;


class OrderController extends Controller
{
    public function read()
   {
       //
    $order = Order::all();
    return view( "Order", ["order"=>$order] );
   }
    public function update(Request $request, $id){
    	//
    }
}
