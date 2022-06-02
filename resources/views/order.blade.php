@extends('layouts.app')

@section('title-block', 'Оформление заказа')

@section('content')
 	               	<h1>Оформление заказа</h1>
 	               	

 	               	
 	            <div class="container">
  <main>


    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Second product</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Third item</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total </span>
            <strong>{{ $order->calculateFullSum() }}</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>


      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        
        
        <form method="POST"  action="{{ route('basket-confirm') }}">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="name" class="form-label">First name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="" >
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="phone" class="form-label">phone</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder=""  >
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
			</div>

           <hr class="my-4">
           {!! csrf_field() !!}

          <input class="w-100 btn btn-primary btn-lg" type="submit" value="Поддтвердить">
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
        	
     	
        	
@endsection

