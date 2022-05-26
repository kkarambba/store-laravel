@extends('layouts.app')

@section('title-block')Categories @endsection 

@section('content')
                	<h1>Categories</h1>


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
      <th scope="col">Action</th>
   
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td>{{ $category->code }}</td>
      <td>{{ $category->name }}</td>
      <td>
      	<form method="POST" action="{{ route('categories.destroy', $category) }}">
      		{!! csrf_field() !!}
      		<a class="btn btn-success" type="button" href="{{ route('categories.show', $category) }}">Open</a>
      		<a class="btn btn-warning" type="button" href="{{ route('categories.edit', $category) }}">Edit</a>
      		{{ method_field('DELETE') }}
      		<input class="btn btn-danger" type="submit" value="Delete">
      	</form>
      </td>
    
    </tr>  
  @endforeach
    <tr>
      <td colspan="5"><a href="{{ route('categories.create') }}" class="btn btn-success" type="button" >Add category</a></td>

    
    </tr> 
  
  </tbody>
</table>
			</div>
						
		</div>
	</div>
	
</section>

@endsection

