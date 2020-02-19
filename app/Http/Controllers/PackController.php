<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;
use App\Business;


class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = Pack::all();

        return view('pack.index', compact('packs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businesses = Business::all();
        return view('pack.create', compact('businesses'));
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

        $pack = new Pack([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'state' => $request->get('state'),
            'price' => $request->get('price'),
            'fk_business_id' => $request->get('idBusiness')
            
        ]);
        $pack->save();
        return redirect('/pack')->with('success', 'pack saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idPack)
    {
        $pack = Pack::find($idPack);


        return view('pack/pack',["pack"=>$pack]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pack $pack)
    {
        return view('pack.edit', ["pack"=>$pack]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pack $pack)
    {
         $request->validate([
            'name'=>'required',
            'state'=>'required',
            'price'=>'required',
            
        ]);

        $pack->name =  $request->get('name');
        $pack->description = $request->get('description');
        $pack->state = $request->get('state');
        $pack->price = $request->get('price');
        
      
        $pack->save();
        
        return redirect('/pack')->with('success', 'pack updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pack $pack)
    {
        $pack->delete();

        return redirect('pack')->with('success', 'pack deleted!');
    }
}
