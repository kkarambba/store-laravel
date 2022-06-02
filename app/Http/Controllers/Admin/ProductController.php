<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$products = Product::get();
        return view('auth.products.index', compact('products'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$categories = Category::get();
        return view('auth.products.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $params = $request->all();
		unset($params['image']);
        if ($request->image != NULL) {
            $params['image'] = $request->file('image')->store('products');
        }
    	 		    
	    	
        Product::create($params);
        return redirect()-> route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
    	    	
        return view('auth.products.show', compact('product'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
		 $categories = Category::get();    	
         return view('auth.products.form', compact('product','categories'));       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $params = $request->all();
        
        unset($params['image']);
        if ($request->image != NULL) {
        	Storage::delete($product->image);
            $params['image'] = $request->file('image')->store('products');
        }
    	foreach(['new','hit','recommend'] as $fieldName){
    		
    		if(!isset($params[$fieldName])){
				$params[$fieldName] = 0;
			}
			 
		} 
    	
    	$product->update($params);
        return redirect()-> route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image != NULL) {
        	Storage::delete($product->image);
        }     	
        $product->delete();
        return redirect()-> route('products.index');
    }
}
