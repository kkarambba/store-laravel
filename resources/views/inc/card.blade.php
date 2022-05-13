<div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $product ->name }}</text></svg>

            <div class="card-body" style="font-size:16pt;">
              <p class="card-text">{{ $product ->description }}</p>
              <p class="card-text">{{ $product ->price }}</p> 
              <p class="card-text">{{ $product ->category_id }}</p>
              <p class="card-text">{{ $product ->code }}</p>                            
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{ route('product', [$product->category->code, $product->code])}}">Детальнее</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Оформить</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Детальнее</button>
                </div>
             
                
                <small class="text-muted">
                
              <b style="font-size: 21pt;">{{ $product ->category->name}}
                </b>
                </small>
              </div>
            </div>
          </div>
</div>