<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliverer;

class MensakasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $buscar = $request->get('buscarpor');

        $tipo = $request->get('tipo');

        if($buscar && $tipo){
            $deliverers = Deliverer::buscarpor($tipo, $buscar)->paginate(5);
        }else{
            $deliverers = Deliverer::all();
        }

        return view('deliverer.index', compact('deliverers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deliverer.create');
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
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $deliverer = new Deliverer([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            
        ]);
        $deliverer->save();
        return redirect('/deliverer')->with('success', 'Deliverer saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idDeliverer)
    {
        $deliverer = Deliverer::find($idDeliverer);


        return view('deliverer/deliverer',["deliverer"=>$deliverer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Deliverer $deliverer)
    {
        return view('deliverer.edit', ["deliverer"=>$deliverer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverer $deliverer)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $deliverer->first_name =  $request->get('first_name');
        $deliverer->last_name = $request->get('last_name');
        $deliverer->email = $request->get('email');
        $deliverer->phone = $request->get('phone');
        $deliverer->save();

        return redirect('/deliverer')->with('success', 'Deliverer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverer $deliverer)
    {
        $deliverer->delete();

        return redirect('deliverer')->with('success', 'Deliverer deleted!');
    }
}
