@extends('layouts.app')

@section('title-block'){{ $category->name }}@endsection 

@section('content')
 	               	<h1>{{ $category->name }}</h1>
 	               	<p>Products: <b>{{ $category->products->count() }} psc</b></p>
 	               	
 	               	<div class="album py-5 bg-light">
    <div class="container">
		<h2>{{ $category->description }}</h2>
		 	 	               	@foreach($category->products as $product)
 	               		@include('layouts.card', compact($product))
 	               	
 	               	@endforeach	
		 		 
    </div>
  </div>
        	
     	
        	
@endsection

