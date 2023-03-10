<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Controllers\Controller;

class OrderController extends Controller {
	
	public function index()
	{
		$orders = Order::active()->get();
		return view('auth.orders.index', compact('orders'));		
	}
	
	public function show(Order $order){
		
		$products = $order->products()->withTrashed()->get();
		return view('auth.orders.show', compact('order', 'products'));		
	}
		
}
