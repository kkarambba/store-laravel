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
<form method="POST" 
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
    <input class="form-control" id="code" name="code" value="@isset($product){{ $product->code }}@endisset"></input>
  </div>

    <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" value="@isset($product){{ $product->name }}@endisset"></input>
  </div>
    <div class="form-group">
    <label for="price">Price</label>
    <input class="form-control" id="price" name="price" value="@isset($product){{ $product->price }}@endisset"></input>
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
    <textarea class="form-control" id="description" name="description" >@isset($product){{ $product->description }}@endisset</textarea>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>				
			</div>
		</div>
		
	</div>
</section>

@endsection

