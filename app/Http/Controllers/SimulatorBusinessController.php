<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;
use App\Order;

class SimulatorBusinessController extends Controller
{
    public function index(Request $request)
    {
    	$business = Business::orderBy('name','ASC')->get();
        return view('simuladorbusiness.index',compact('business'));
    }

}
