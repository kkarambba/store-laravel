@extends('layouts.app')

@section('title-block')Магазин @endsection 

@section('content')
 	               	<h1>Магазин</h1>
 	               	
 	               	<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @include('inc.card')
		@include('inc.card')
		@include('inc.card')

      </div>
    </div>
  </div>
        	
     	
        	
@endsection

