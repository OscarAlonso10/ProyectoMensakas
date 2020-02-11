<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct() {
      $this->middleware('auth');
   }
    public function create(){
    	return view('users.create');
    }
    public function read($id){
    	//
    }
    public function update(Request $request, $id){
    	//
    }
    public function delete($id){
    	//
    }
}
