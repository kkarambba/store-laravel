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
      <td>{{ $order->calculateFullSum()}}</td>
      @if(Auth::user()->is_admin==1)
      	<td><a href="{{ route('orders-show', $order) }}" class="btn btn-success" type="button">Open</a></td>
      @else
      	<td><a href="{{ route('person.orders-show', $order) }}" class="btn btn-success" type="button">Open</a></td>		
      @endif            
    </tr> 	
  	@endforeach
 

  </tbody>
</table>
		
	</div>
</div>
@endsection

