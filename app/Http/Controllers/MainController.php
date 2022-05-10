<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function store(){
		return view('store', compact('store'));
	}

	public function category($category){
		return view('welcome');		
	}
	
}
