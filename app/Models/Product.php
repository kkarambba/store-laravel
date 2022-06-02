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
	protected $fillable = ['category_id','code','name','description','image','price','hit','new','recommend'];
	
	public function category(){
		return $this->belongsTo(Category::class);
	}
	
	public function getPriceForCount(){
		if(!is_null($this->pivot)){
			return $this->pivot->count * $this->price;
		}
		return $this->price;
				
	}
	
	public function setNewAttribute($valute){
		$this->attributes['new'] = $valute === 'on' ? 1 : 0;
		
	}

	public function setHitAttribute($valute){
		$this->attributes['hit'] = $valute === 'on' ? 1 : 0;
		
	}
	
	public function setRecommendAttribute($valute){
		$this->attributes['recommend'] = $valute === 'on' ? 1 : 0;
		
	}	
	
	public function isHit(){
		return $this->hit === 1;
		
	}
		
	public function isNew(){
		return $this->new === 1;
	}	
	
	public function isRecommend(){
		return $this->recommend === 1;
	}
	
	
}
