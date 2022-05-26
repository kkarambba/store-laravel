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
<form method="POST" 
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
    <input class="form-control" id="code" name="code" value="@isset($category){{ $category->code }}@endisset"></input>
  </div>
    <div class="form-group">
    <label for="category_id">category_id</label>
    <input class="form-control" id="category_id" name="category_id" value="@isset($category){{ $category->category_id }}@endisset"></input>
  </div>
    <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" value="@isset($category){{ $category->name }}@endisset"></input>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" >@isset($category){{ $category->description }}@endisset</textarea>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>				
			</div>
		</div>
		
	</div>
</section>

@endsection

