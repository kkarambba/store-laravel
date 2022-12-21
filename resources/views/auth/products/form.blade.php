@extends('layouts.app')

@isset($product)
	@section('title-block')Edit Product {{ $product->name }} @endsection
@else
	@section('title-block')Add product @endsection
@endisset

@isset($product)
	
@else
	
@endisset

@section('content')

@isset($product)
	<h1>Edit product <b>{{ $product->name }}</b></h1>	
@else
	<h1>Add product</h1>
@endisset
                	
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
<form enctype="multipart/form-data"  method="POST" 
	@isset($product)
		action="{{ route('products.update', $product ) }}"	
	@else
		 action="{{ route('products.store') }}"	
	@endisset
>
	@isset($product)
		{{ method_field('PUT') }}
	@endisset	
	{!! csrf_field() !!}

    <div class="form-group">
    <label for="code">Code</label>
    <input class="form-control" id="code" name="code" value="{{ old('code', isset($product) ? $product->code : NULL) }}"></input>
    </div>

    <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" value="{{ old('name', isset($product) ? $product->name : NULL) }}"></input>
    </div>
    
    <div class="form-group">
    <label for="price">Price</label>
    <input class="form-control" id="price" name="price" value="{{ old('price', isset($product) ? $product->price : NULL) }}"></input>
    </div>
     <div class="form-group">
    <label for="count">Count</label>
    <input class="form-control" id="count" name="count" value="{{ old('count', isset($product) ? $product->count : NULL) }}"></input>
    </div>   
    <div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id" class="form-control">
    	@foreach($categories as $category)
    	<option value="{{ $category->id }}"
    	
    	
    		@isset($product)
				@if($product->category_id == $category->id)
					selected
				@endif	
			@endisset>{{ $category->name }} </option>
    	@endforeach
    	
    </select>

  </div>  
  

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" >{{ old('description', isset($product) ? $product->description : NULL) }}</textarea>
  </div>
  <div class="mb-3">
  <label for="image" class="form-label">Product image</label>
  <input class="form-control" type="file" id="image" name="image">
</div><br>


@foreach([
	'hit' => 'Hit',
	'new' => 'New',
	'recommend' => 'Recommend',	
] as $field => $title)
    <div class="form-group">
    <label for="{{ $title }}">{{ $title }}</label>
    <input type="checkbox"  id="{{ $field }}" name="{{ $field }}" 
    	
    	 	@if(isset($product) && $product->$field === 1)
    	 	    checked="checked"	 	
    	 	@endif    	 	
    >   		
    </input>
  </div>
@endforeach


  <button type="submit" class="btn btn-primary">Submit</button> 
</form>				
			</div>
		</div>
		
	</div>
</section>

@endsection

