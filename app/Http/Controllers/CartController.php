<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;


class CartController extends Controller
{
    public function store(Request $request )
    { 

        $product = Product::findOrFail($request->input('id'));
        
       Cart::add(
            $product->id, 
            $product-> Title, 
            $request->input('qty'), 
            $product->Price,

        );
       
    
        return redirect('/')->with('message','succssfully added');
    }
    public function index(){
        $products = Product::all();
        $cart = Cart::content();
        // dd($cart);
       return view('components.Cart')->with('carts',$cart);
    }
    public function removeCart(Request $request)
    {
        Cart::remove($request->rowId);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect('/cartItem');
    }
}
