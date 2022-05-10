<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function store(){
		return view('store', compact('store'));
	}
	
    public function categories(){
    	$categories = Category::get();
		return view('categories', compact('categories'));
	}	

	public function category($code){
		$category = Category::where('code', $code)->first();
		//dd($category);
		return view('category', compact('category'));		
	}
	
}
