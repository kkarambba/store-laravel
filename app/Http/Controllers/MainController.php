<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function categories(){
    	$categories = Category::get();
		return view('categories', compact('categories'));
	}

	public function category($code){
		$category = Category::where('code', $code)->first();
		//dd($category);
		return view('category', compact('category'));		
	}	
		
    public function product($category, $product = NULL){
		return view('product', compact('product'));
	}
	
    public function order(){
		return view('order', compact('order'));
	}	
	


	
}
