<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    	$rules = [
			'code' => 'required|min:5|max:255|unique:categories,code',
			'category_id' => 'required|numeric|min:1|max:2147483647|unique:categories,category_id',			
  			'name' =>  'required|min:3|max:255',
  			'description' =>  'required|min:5|max:400',
        ];
        if($this->route()->named('categories.update')){

			$rules['code'] .= ',' . $this->route()->parameter('category')->id;
			$rules['category_id'] .= ',' . $this->route()->parameter('category')->id;			
			
		}
        
        // dd(get_class_methods($this->route())); 
        return $rules;
    }
}
