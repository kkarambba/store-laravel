@extends('layouts.app')

@section('title-block')Категории@endsection 

@section('content')
 	               	<h1>Категории</h1>
 	               	<h2><a href="{{ route('basket') }}">Корзина</a></h2>
 	               	<div class="album py-5 bg-light">
	@foreach($categories as $category)
    <div class="container">
		<h2><a href="{{ route('category', $category->code) }}">{{	$category->name }}</a></h2>
		<p style="color: red;font-size:15pt;">{{ $category->description }}</p>

    </div>	
	@endforeach 
	
	 	               	@foreach($products as $product)
 	               		@include('layouts.card', compact($product))
 	               	
 	               	@endforeach	               	

  </div>
        	
     	
        	
@endsection

