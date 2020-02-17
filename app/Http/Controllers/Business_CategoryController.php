<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business_Category

class Business_CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_categories = Business_Category::all();

        return view('business_category.index', compact('business_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('business_category.create');
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

        $business_category = new Business_Category([
            'name' => $request->get('name')
            
        ]);
        $business_category->save();
        return redirect('/business_category')->with('success', 'business category saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idBusiness_Category)
    {
        $business_category = Business_Category::find($idBusiness_Category);


        return view('business_category/business_category',["business_category"=>$business_category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Business_Category $business_category)
    {
        return view('business_category.edit', ["business_category"=>$business_category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Business_Category $business_category)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $business_category->name =  $request->get('name');
        
        $business_category->save();
        
        return redirect('/business_category')->with('success', 'business category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business_Category $business_category)
    {
        $business_category->delete();

        return redirect('business_category')->with('success', 'business category deleted!');
    }
}
