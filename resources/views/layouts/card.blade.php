


<section>
	<div class="container">
		<div class="row">
		<div style="padding: 5px;margin:5px;">
          <div class="card shadow-sm">
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
 

            <div class="card-body" style="font-size:16pt;">
              <p class="card-text">Name: <b>{{ $product ->name }}</b></p>
              <p class="card-text">Discription: <b>{{ $product ->description }}</b></p>
              <p class="card-text">Price: <b>{{ $product ->price }} USD</b></p> 
              <p class="card-text">Category: <b>{{ $product ->category->name}}</b></p>
              <!-- <p class="card-text"><b>{{ $product ->code }}</b></p> -->                            
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <form method="POST" action="{{ route('basketAdd', $product) }}"> 
                
                {!! csrf_field() !!}             
                  @if($product->isAviable()) 
                  	<button type="submit" class="btn btn-success">Order</button>

                  @else
                  	<button disabled class="btn btn-danger">Out of Stock</button>                  	
                  @endif
                  <button type="button" class="btn btn-warning">
                  
                  	<a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}">Details</a>
                  </button>
                </form>
				 
                </div>
             
                
                <small class="text-muted">
                

                </small>
              </div>
            </div>
          </div>
</div>		
		</div>
	</div>	
	
</section>
