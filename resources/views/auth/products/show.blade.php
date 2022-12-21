@extends('layouts.app')

@section('title-block') {{ $product->name }} @endsection 

@section('content')
                	<h1>{{ $product->name }}</h1>
<div class="card" style="width: 18rem;">

          <div class="thumbnail">
          <div class=labels>
          	@if($product->isNew())
          		<span class="badge badge-success">New</span>
          	@endif          	
          	@if($product->isHit())
          		<span class="badge badge-warning">Hit</span>
          	@endif          	
          	@if($product->isRecommend())
          		<span class="badge badge-danger">Recommend</span>
          	@endif
          	
          	
          	
          	
          </div>
          	<img  src="{{ Storage::url($product->image) }}" width="250px;">
          	
          </div>

  <div class="card-body">

    <p class="card-text">Description - <b>{{ $product->description }}</b></p>
  </div>
  <ul class="list-group list-group-flush">
     <li class="list-group-item">Code - <b>{{ $product->code }}</b></li>
     <li class="list-group-item">ID - <b>{{ $product->id }}</b></li>
	 <li class="list-group-item">CategoryID - <b>{{ $product->category_id }}</b></li>
     <li class="list-group-item">Count - <b>{{ $product->count }}</b></li>	    

   
  </ul>

</div>
@endsection

