@extends('layouts.app')

@section('title-block'){{ $category->name }}@endsection 

@section('content')
 	               	<h1>{{ $category->name }} {{ $category->products->count() }}</h1>
 	               	
 	               	<div class="album py-5 bg-light">
    <div class="container">
		<h2>{{ $category->description }}</h2>
		 	 	               	@foreach($category->products as $product)
 	               		@include('inc.card', compact($product))
 	               	
 	               	@endforeach	
		 		 
    </div>
  </div>
        	
     	
        	
@endsection

