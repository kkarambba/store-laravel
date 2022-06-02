<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsFilerRequest extends FormRequest
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
            'price_from' => 'nullable|numeric|min:0',
            'price_to' => 'nullable|numeric|min:0',  		
  		];
  		  	
    	

        return $rules;
    }
}
