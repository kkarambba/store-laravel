<div class="col">
          <div class="card shadow-sm">
  <img class="card-img-top" src="" alt="Card image cap" width="100px;">

            <div class="card-body" style="font-size:16pt;">
              <p class="card-text">{{ $product ->description }}</p>
              <p class="card-text">{{ $product ->price }}</p> 
              <p class="card-text">{{ $product ->category_id }}</p>
              <p class="card-text">{{ $product ->code }}</p>                            
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <form method="POST" action="{{ route('basketAdd', $product) }}"> 
                
                {!! csrf_field() !!}             
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Оформить</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ route('product', [$product->category->code, $product->code])}}">Детальнее</a></button></form>
				 
                </div>
             
                
                <small class="text-muted">
                
              <b style="font-size: 21pt;">{{ $product ->category->name}}
                </b>
                </small>
              </div>
            </div>
          </div>
</div>