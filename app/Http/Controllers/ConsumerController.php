<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumer;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumers = Consumer::all();

        return view('consumer.index', compact('consumers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumer.create');
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

        $consumer = new Consumer([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'location'=>$request->get('location'),
            'phone' => $request->get('phone'),
            
        ]);
        $consumer->save();
        return redirect('/consumer')->with('success', 'Consumer saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idConsumer)
    {
        $consumer = Consumer::find($idConsumer);


        return view('consumer/index',["consumer"=>$consumer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumer $consumer)
    {
        return view('consumer.edit', ["consumer"=>$consumer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumer $consumer)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $consumer->first_name =  $request->get('first_name');
        $consumer->last_name = $request->get('last_name');
        $consumer->email = $request->get('email');
        $consumer->location = $request->get('location');
        $consumer->phone = $request->get('phone');
        $consumer->save();

        return redirect('/consumer')->with('success', 'consumer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumer $consumer)
    {
        $consumer->delete();

        return redirect('consumer')->with('success', 'Consumer deleted!');
    }
}

