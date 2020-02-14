<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductosController extends Controller
{

public function index()
    {
        $products = Product::all()->sortByDesc("created_at");
 
        return view('products',["products"=>$products]);
    }
 
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
 
    }
}
