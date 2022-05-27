@extends('layouts.app')

@isset($category)
	@section('title-block')Edit category {{ $category->name }} @endsection
@else
	@section('title-block')Add category @endsection
@endisset

@isset($category)
	
@else
	
@endisset

@section('content')

@isset($category)
	<h1>Edit category <b>{{ $category->name }}</b></h1>	
@else
	<h1>Add category</h1>
@endisset
                	
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
<form enctype="multipart/form-data" method="POST" 
	@isset($category)
		action="{{ route('categories.update', $category ) }}"	
	@else
		action="{{ route('categories.store') }}"	
	@endisset
>
	@isset($category)
		{{ method_field('PUT') }}
	@endisset	
{!! csrf_field() !!}

    <div class="form-group">
    <label for="code">Code</label>
    <input class="form-control" id="code" name="code" value="{{ old('code', isset($category) ? $category->code : NULL) }}"></input>
  </div>
    <div class="form-group">
    <label for="category_id">Category ID</label>
    <input class="form-control" id="category_id" name="category_id" value="{{ old('category_id', isset($category) ? $category->category_id : NULL) }}"></input>
  </div>
    <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" value="{{ old('name', isset($category) ? $category->name : NULL) }}"></input>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" >{{ old('description', isset($category) ? $category->description : NULL) }}</textarea>
  </div>
  <div class="mb-3">
  <label for="image" class="form-label">Category image</label>
  <input class="form-control" type="file" id="image" name="image">
</div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>				
			</div>
		</div>
		
	</div>
</section>

@endsection

