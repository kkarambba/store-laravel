<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ResetController extends Controller
{
    public function reset(){
    	// this code will reset all DB
    	// Artisan::call('migrate:fresh --seed');
    	$folder = 'delete';
    	Storage::deleteDirectory($folder);
    	Storage::makeDirectory($folder);
    	
    	$files = Storage:disk('images')->files($folder);
    //is not complete	
    //	foreach($files as $file){
    //		Storage::put($file)->disk('images')->get($file);
	//		
	//	}
		    
    	session()->flash('success', 'DB was reset');
    	return redirect()->route('index');
		dd(1);
	}
}
