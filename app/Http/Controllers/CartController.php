<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Cart;
// use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $cart = \Cart::add([
            'id' => $request->id,
            'Title' => $request->Title,
            'Price' => $request->Price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'Image' => $request->Image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('components.Cart');
        
    }
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('Cart'));
    }
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }
}
