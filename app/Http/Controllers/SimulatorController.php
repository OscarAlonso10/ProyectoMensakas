<?php

namespace App\Http\Controllers;
use DB;
use App\Consumer;
use App\Business;
use App\Product;
use App\Product_has_Order;
use App\Order;

use Illuminate\Http\Request;

class SimulatorController extends Controller
{
     public function index(Request $request)
    {
        return view('simulador.index');
    }

     public function store(Request $request)
    {
        $this->validate($request,[ 'first_name'=>'required', 'phone'=>'required', 'mail'=>'required', 'address'=>'required', 'city'=>'required','target' => 'required']);

        $location = $request->get('city');
        $business = Business::where('location', $location)->get();
        $consumer = Consumer::create($request->all());

        return view('simulador.businessLocation',compact('consumer','business','location'));
    }
}
