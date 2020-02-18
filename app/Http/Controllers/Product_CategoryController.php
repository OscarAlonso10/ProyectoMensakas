<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_Category;

class Product_CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = Product_Category::all();

        return view('product_category.index', compact('product_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_category.create');
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
            'name'=>'required'
        ]);

        $product_category = new Product_Category([
            'name' => $request->get('name')
            
        ]);
        $product_category->save();
        return redirect('/product_category')->with('success', 'product category saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idProduct_Category)
    {
        $product_category = Product_Category::find($idProduct_Category);


        return view('product_category/product_category',["product_category"=>$product_category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_Category $product_category)
    {
        return view('product_category.edit', ["product_category"=>$product_category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_Category $product_category)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $product_category->name =  $request->get('name');
        
        $product_category->save();
        
        return redirect('/product_category')->with('success', 'product category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Category $product_category)
    {
         $product_category->delete();

        return redirect('product_category')->with('success', 'product category deleted!');
    }
}
