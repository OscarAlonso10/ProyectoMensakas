<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = Business::all();

        return view('business.index', compact('businesses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('business.create');
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
            'location'=>'required',
            'email'=>'required',
            'adress'=>'required',
            'number'=>'required'
        ]);

        $business = new Business([
            'name' => $request->get('name'),
            'location' => $request->get('location'),
            'email' => $request->get('email'),
            'adress' => $request->get('adress'),
            'number'=> $request->get('number'),
            'zipcode'=> $request->get('zipcode')
            
        ]);
        $business->save();
        return redirect('/business')->with('success', 'business saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idBusiness)
    {
        $business = Business::find($idBusiness);


        return view('business/business',["business"=>$business]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        return view('business.edit', ["business"=>$business]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'email'=>'required',
            'adress'=>'required',
            'number'=>'required'
        ]);

        $business->name =  $request->get('name');
        $business->location = $request->get('location');
        $business->email = $request->get('email');
        $business->adress = $request->get('adress');
        $business->number = $request->get('number');
        $business->zipcode = $request->get('zipcode');
        $business->save();
        
        return redirect('/business')->with('success', 'business updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        $business->delete();

        return redirect('business')->with('success', 'business deleted!');
    }
}
