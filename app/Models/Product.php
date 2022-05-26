<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
/*    public function getCatgory(){
		//$category = Category::find($this->category_id);
		return Category::where('id', $this->category_id)->first();		
		
	}
	
*/	
	protected $fillable = ['category_id','code','name','description','image','price'];
	
	public function category(){
		return $this->belongsTo(Category::class);
	}
	
	public function getPriceForCount(){
		if(!is_null($this->pivot)){
			return $this->pivot->count * $this->price;
		}
		return $this->price;
				
	}
}
