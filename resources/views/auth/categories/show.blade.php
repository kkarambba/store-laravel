@extends('layouts.app')

@section('title-block') {{ $category->name }} @endsection 

@section('content')
                	<h1>{{ $category->name }}</h1>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ Storage::url($category->image) }}" alt="Card image cap">
  <div class="card-body">

    <p class="card-text">Description - <b>{{ $category->description }}</b></p>
  </div>
  <ul class="list-group list-group-flush">
   <li class="list-group-item">Code - <b>{{ $category->code }}</b></li>
    <li class="list-group-item">ID - <b>{{ $category->id }}</b></li>
    
    <li class="list-group-item">Products count - <b>{{ $category->products->count() }}</b></li>
   
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
@endsection

