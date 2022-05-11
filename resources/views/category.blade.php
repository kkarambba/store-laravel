@extends('layouts.app')

@section('title-block'){{ $category->name }}@endsection 

@section('content')
 	               	<h1>{{ $category->name }}</h1>
 	               	
 	               	<div class="album py-5 bg-light">
    <div class="container">
		<h2>{{ $category->description }}</h2>
		 @include('inc.card')
		 		 
    </div>
  </div>
        	
     	
        	
@endsection

