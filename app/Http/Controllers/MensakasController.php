<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensakas;

class MensakasController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function read()
   {
       //
   	$mensakas = Mensakas::all();
   	return view( "Mensakas", ["mensakas"=>$mensakas] );
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
         $mensakas = new Mensakas();

        return view('mensakas.create')->with(compact('mensakas'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
   public function store(Request $request)
   {
       //
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
       //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  Request  $request
    * @param  int  $id
    * @return Response
    */
   public function update(Request $request, $id)
   {
       //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
       //
   }
}
