<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Order;
class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		$orderId = session('orderId');
		
		
		if (!is_null($orderId)){
			$order = Order::findOrFail($orderId);
	/*		
			dd($order->pruducts);
			if($order->pruducts->count() == 0){
				session()->flash('warning', 'Cart is empty');
				return redirect()->route('index');
			} */
			  
		}  
		  	
        return $next($request);
    }
}
