@extends('layouts.app')

@section('title-block')Order № {{ $order->id }} @endsection 

@section('content')
                	<h1>Order № {{ $order->id }}</h1>
                	
<div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ № {{ $order->id }}</h1>
                    <p>Заказчик: <b>{{ $order->name }} </b></p>
                    <p>Номер телефона: <b>{{ $order->phone }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Count</th>
                            <th>Price</th>
                            <th>Sum</th>
                        </tr>
                        </thead>
                        <tbody>
                      	@foreach($products as $product)
                      	
                            <tr>
                                <td>                                    
                                        <a href="{{ route('product', [$product->category->code, $product->code]) }}"><img height="56px" src="{{ Storage::url($product->image) }}"></a>
                                        <a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->name }}</a> 
                                </td>
                                <td><span class="badge"></span></td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->getPriceForCount() }}</td>
                            </tr>                      		
                      	@endforeach

                      
                        <tr>
                            <td colspan="3">Summary:</td>
                            <td>{{ $order->calculateFullSum() }}</td>
                        </tr>
                    
                            <tr>
                                <td colspan="3">Был использован купон:</td>
                                <td><a href=""></a></td>
                            </tr>
                     
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>                	

@endsection

