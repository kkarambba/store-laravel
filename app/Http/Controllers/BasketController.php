<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Classes\Basket;


class BasketController extends Controller
{
    public function basket()
    {
        $order = (new Basket())->getOrder();

        return view('basket', compact('order'));
    }

    public function basketСonfirm(Request $request)
    {


        if ((new Basket())->saveOrder($request->name, $request->phone)) {
            session()->flash('success','Order confirmed');
        } else {
            session()->flash('warning','Product is unviable.');
        }

        Order::eraseOrderSum();

        return redirect()->route('index');
    }

    public function basketPlace()
    {
        $basket = new Basket();
        $order  = $basket->getOrder();
        if (!$basket->countAviable()) {
            $success = session()->flash('warning','Out of stock.');
            return redirect()->route('basket');
        }

        return view('order', compact('order'));
    }



    public function basketAdd(Product $product)
    {

        $result = (new Basket(true))->addProduct($product);

        if ($result) {

            $success = session()->flash('success','Addet to cart ' . $product->name);

        } else {

            $success = session()->flash('warning','Out of stock. Only ' . $product->count . ' pcs is available.');
        }

        return redirect() ->route('basket');

    }


    public function basketRemove(Product $product)
    {
        (new Basket())->removeProduct($product);

        $success = session()->flash('warning','Убран из корзины ' . $product->name);

        return redirect() ->route('basket');
    }
}
