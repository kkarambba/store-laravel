@extends('layouts.app')

@section('title-block', 'Оформление заказа')

@section('content')
 	               	<h1>Оформление заказа</h1>
 	               	

 	               	
 	            <div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Checkout form</h2>
      <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row g-5" style="font-size: 16pt;">
      <div class="col-md-2 col-lg-8 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3" >
        @foreach($order->products as $product)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <p class="my-0"><a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->name }}</a></p> 
              
              
              <div class="btn-group">
              	Кол-во: {{ $product->pivot->count }} 
              	
              	
              
              	
              	              	<form method="POST" action="{{ route('basketRemove', $product) }}">
              	              	{!! csrf_field() !!}
              	              		<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
              	              		
              	              	</form>              					
              	              	<form method="POST" action="{{ route('basketAdd', $product) }}">
              	              	{!! csrf_field() !!}
              	              		<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
              	              		
              	              	</form>
              </div> <br>  
             
              <small class="text-muted">{{ $product->description }}</small>
            </div>
            <span class="text-muted">{{ $product->price }}</span>
             <span class="text-muted">Сумма: {{ $product->getPriceForCount() }}</span>      
          </li>        
        @endforeach

        
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong>{{ $order->getFullPrice() }}</strong>
          </li>
        </ul>

        <form class="card p-2" >
          <div class="input-group">
            <a href="{{ route('order')}}" ><span style="color:#000">Оформить</span>></a>
          </div>
        </form>
      </div>


 
    </div>
  </main>

</div>
        	
     	
        	
@endsection

