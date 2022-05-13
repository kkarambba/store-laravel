<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function categories(){
    	$categories = Category::get();
    	$products = Product::get();    	
		return view('categories', compact('categories', 'products'));
	}

	public function category($code){
		$category = Category::where('code', $code)->first();
		//$products = Product::where('category_id', $category ->id)->get(); 
		//dd($category);
		return view('category', compact('category', 'products'));		
	}	
		
    public function product($category, $product = NULL){
		return view('product', ['product' => $product]);
	}
	
    public function order(){
		return view('order', compact('products'));
	}	
	


	
}
