@extends('layouts.app')

@section('title-block') {{ $product->name }} @endsection 

@section('content')
                	<h1>{{ $product->name }}</h1>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">

    <p class="card-text">Description - <b>{{ $product->description }}</b></p>
  </div>
  <ul class="list-group list-group-flush">
   <li class="list-group-item">Code - <b>{{ $product->code }}</b></li>
    <li class="list-group-item">ID - <b>{{ $product->id }}</b></li>
     <li class="list-group-item">CategoryID - <b>{{ $product->category_id }}</b></li>   

   
  </ul>

</div>
@endsection

