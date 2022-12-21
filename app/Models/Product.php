<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model{	
	use SoftDeletes;
	
	protected $fillable = ['category_id','code','name','description','image','price','hit','new','recommend','count'];
	
	public function category()
	{
		return $this->belongsTo(Category::class);
	}
	
	public function getPriceForCount()
	{
		if(!is_null($this->pivot)){
			return $this->pivot->count * $this->price;
		}
		return $this->price;
				
	}
	
	public function scopeByCode($querry, $code)
	{		
		return $querry->where('code', $code);		
	}
	
	public function scopeHit($querry)
	{				
		return $querry->where('hit', 1);
				
	}	
	
	public function scopeNew($querry)
	{				
		return $querry->where('new', 1);
				
	}
		
	public function scopeRecommend($querry)
	{				
		return $querry->where('recommend', 1);
				
	}
	
	public function setNewAttribute($valute)
	{
		$this->attributes['new'] = $valute === 'on' ? 1 : 0;		
	}

	public function setHitAttribute($valute)
	{
		$this->attributes['hit'] = $valute === 'on' ? 1 : 0;		
	}
	
	public function setRecommendAttribute($valute)
	{
		$this->attributes['recommend'] = $valute === 'on' ? 1 : 0;		
	}
	
	public function isAviable()
	{
		return !$this->trashed() && $this->count > 0 ;
	}	
	
	public function isHit()
	{
		return $this->hit === 1;
		
	}
		
	public function isNew()
	{
		return $this->new === 1;
	}	
	
	public function isRecommend()
	{
		return $this->recommend === 1;
	}
	
	
}
