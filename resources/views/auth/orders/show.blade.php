@extends('layouts.app')

@section('title-block')Order № {{ $order->id }} @endsection 

@section('content')
                	<h1>Order № {{ $order->id }}</h1>
                	
<div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ № {{ $order->id }}</h1>
                    <p>Заказчик: <b>{{ $order->name }}</b></p>
                    <p>Номер телефона: <b>{{ $order->phone }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Стоимость</th>
                        </tr>
                        </thead>
                        <tbody>
                      	@foreach($order->products as $product)
                            <tr>
                                <td>
                                    <a href="">
                                        <img height="56px" src="{{ Storage::url($product->image) }}">
                                        {{ $product->name }}
                                             
                                        
                                    </a>
                                </td>
                                <td><span class="badge"></span></td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->getPriceForCount() }}</td>
                            </tr>                      		
                      	@endforeach

                      
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>{{ $order->getFullPrice() }}</td>
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

