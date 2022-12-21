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
  
   <li class="list-group-item">Price - <b>{{ $product->price }} USD</b></li>  
   <li class="list-group-item">Code - <b>{{ $product->code }} </b></li>
   <li class="list-group-item">ID - <b>{{ $product->id }}</b></li>
   <li class="list-group-item">Category - <b>{{ $product->category->name }}</b></li>   

   
  </ul>

</div>

                <form method="POST" action="{{ route('basketAdd', $product) }}"> 
                
                {!! csrf_field() !!}             
                  @if($product->isAviable()) 
                  	<button type="submit" class="btn btn-success">Order</button>

                  @else
                  	<button disabled class="btn btn-danger">Out of Stock</button>                  	
                  @endif

                </form>
@endsection

