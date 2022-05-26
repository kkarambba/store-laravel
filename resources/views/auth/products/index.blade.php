@extends('layouts.app')

@section('title-block')Products @endsection 

@section('content')
                	<h1>Products</h1>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">URL</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>            
      <th scope="col">Action</th>
   
    </tr>
  </thead>
  <tbody>
	@foreach($products as $product) 
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->code }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->category->name }}</td>     
      <td>{{ $product->price }}</td>      
      
      <td>
      	<form method="POST" action="{{ route('products.destroy', $product) }}">
      		{!! csrf_field() !!}
      		<a class="btn btn-success" type="button" href="{{ route('products.show', $product) }}">Open</a>
      		<a class="btn btn-warning" type="button" href="{{ route('products.edit', $product) }}">Edit</a>
      		{{ method_field('DELETE') }}
      		<input class="btn btn-danger" type="submit" value="Delete">
      	</form>
      </td>
    
    </tr>  
	@endforeach
    <tr>
      <td colspan="5"><a href="{{ route('products.create') }}" class="btn btn-success" type="button" >Add product</a></td>

    
    </tr> 
  
  </tbody>
</table>
			</div>
						
		</div>
	</div>
	
</section>

@endsection

