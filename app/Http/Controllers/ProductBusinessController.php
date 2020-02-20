<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductBusinessController extends Controller
{
    public function index(Request $request)
    {
    	$fk_idBusiness = $request -> get("business");
    	error_log($fk_idBusiness);
    	$products = Product::where('fk_business_id','=',$fk_idBusiness)->get();
    	error_log($products);
    	
   		
        return view('productBusiness.index',compact('products'));
    }
}
