<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
// use App\Models\Cart;


class CartController extends Controller
{
    public function store(Request $request )
    { 

        $product = Product::findOrFail($request->input('id'));
        // dd($product);
        Cart::add(
            $product->id, 
            $product-> Title, 
            $product-> Image,
            $request->input('quantity'),
            $product->Price/100,
        );

        return redirect('/home')->with('message','succssfully added');
    }
    public function index(){
        $products = Product::all();
        $cart = Cart::content();
        //dd($cart);
        return view('components.Cart')->with('carts',$cart);
    }
    public function removeCart(Request $request)
    {
        Cart::remove($request->rowId);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect('/cartItem');
    }
}
