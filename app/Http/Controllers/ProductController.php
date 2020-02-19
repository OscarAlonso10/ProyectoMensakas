<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Business;
use App\Language;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $businesses = Business::all();
        $languages = Language::all();
        return view('product.create', compact('businesses','languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'state'=>'required',
            'price'=>'required',
            'idBusiness'=>'required'
        ]);

        $product = new Product([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'state' => $request->get('state'),
            'price' => $request->get('price'),
            'type'=> $request->get('type'),
            'fk_business_id' => $request->get('idBusiness'),
            'fk_language_id' => $request->get('idlanguage'),
            
        ]);
        $product->save();
        return redirect('/product')->with('success', 'product saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idProduct)
    {
        $product = Product::find($idProduct);


        return view('product/product',["product"=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', ["product"=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'=>'required',
            'state'=>'required',
            'price'=>'required'
        ]);

        $product->name =  $request->get('name');
        $product->description = $request->get('description');
        $product->state = $request->get('state');
        $product->price = $request->get('price');
        $product->type = $request->get('type');
      
        $product->save();
        
        return redirect('/product')->with('success', 'product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('product')->with('success', 'product deleted!');
    }
}
