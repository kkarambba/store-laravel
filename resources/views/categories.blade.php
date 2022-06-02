@extends('layouts.app')

@section('title-block')Categories @endsection 

@section('content')

<h1>Categories</h1>



    <form method="GET" action="{{ route('categories')}}">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Price from
                
                    <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from }}">
                    
                   
                </label>
                <label for="price_to">Price to
                    <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="hit">Hit
                    <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif>
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="new">New
                    <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> 
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="recommend">Recommend
                    <input type="checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif>
                </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="" class="btn btn-warning"></a>
            </div>
        </div>
    </form>


<div class="col-sm-6 col-md-12">
	@foreach($categories as $category)
	<ul>
		<li><h4><a href="{{ route('category', $category->code) }}">{{	$category->name }}</a></h4>
		<p style="color: red;font-size:15pt;">{{ $category->description }}</p></li>
	</ul>
	@endforeach 
<div class="row">	
	@foreach($products as $product)
		
	@include('layouts.card', compact($product))
 	               	
	@endforeach
</div>
<div class="row">
	{{ $products->links() }}
</div>	               	

</div>
        	
     	
        	
@endsection

