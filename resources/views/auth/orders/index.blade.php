@extends('layouts.app')

@section('title-block')Orders @endsection 

@section('content')
                	<h1>Orders</h1>

<div class="container">
	<div class="row">
	<table class="table table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Phone</th>
      <th>Date</th>
      <th>Summary</th>
      <th>action</th>
                 
    </tr>
  </thead>
  <tbody>
  	@foreach($orders as $order)
    <tr>
      <th scope="row">{{ $order->id}}</th>
      <td>{{ $order->name}}</td>
      <td>{{ $order->phone}}</td>
      <td>{{ $order->created_at->format('H-i d/m/y')}}</td>
      <td>{{ $order->getFullPrice()}}</td>
      <td><a href="">Подробнее</a></td>            
    </tr> 	
  	@endforeach
 

  </tbody>
</table>
		
	</div>
</div>
@endsection

