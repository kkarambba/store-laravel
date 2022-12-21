<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsFilerRequest;
use Illuminate\Support\Facades\Log;
use Debugbar\Debugbar;

class MainController extends Controller
{
    public function categories(ProductsFilerRequest $request){
    	
    	//loggin IP adress
    	//Log::info($request->ip());
    	
    	//Debugbar
    	//app('debugbar')->info($request);
    	
    	
    	$categories = Category::get();
    	
    	$productsQuery = Product::with('category');
    	 		 	
    	if($request->price_from != NULL){
    		
			$productsQuery->where('price', '>=', $request->price_from);
			
		}
    	if($request->price_to != NULL){
    		    		
			$productsQuery->where('price', '<=', $request->price_to);
		}
		
		foreach(['hit', 'recommend', 'new'] as $field){
			if($request->has($field)){
				$productsQuery->$field();
			}			
		}		
				
    	$products = $productsQuery->paginate(5)->withPath("?" . $request->getQueryString());
		    	
		return view('categories', compact('categories', 'products'));
	}
	


	public function category($code){
		$category = Category::where('code', $code)->first();
		//$products = Product::where('category_id', $category ->id)->get(); 
		//dd($category);
		return view('category', compact('category', 'products'));		
	}
		
		
    public function product($code, $productCode){
    	$product = Product::withTrashed()->byCode($productCode)->first();
		return view('product', compact('product'));
	}
	
}
