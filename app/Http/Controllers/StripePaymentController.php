<?php
    
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\Order;
use Session;
use Stripe;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $products = Product::all();
        $cart = Cart::content();
        $total = Cart::total();
       return view('components.checkout')->with('carts',$cart)->with('total',$total);

    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
        // $createOrder = Order::create([
        //     'user_id'=>$request->user_id,
        //     'product_id'=> $request-> product_id,
        //     'quantity'=>$request->quantity,
        //     'amount'=>$request->amount,
        //     'address'=>$request->address,
        //     'status' => $request -> status
        // ]);
        // Session::flash('success', 'Payment successful!');
        $cart = Cart::content();
        // $carts = $cart->name;
            foreach($cart as $cart){
                $createOrder = Order::create([
                    'user_id'=>Auth()->user()->id,
                    'product_id'=> $cart->id,
                    'quantity'=>$cart->qty,
                    'amount'=>$cart->qty*$cart->price,
                    'address'=>'kigali',
                    'status' => 'pending'
                ]);
            }
        
        return back();
    }
    // public function store(Request $request)
    // {
    //     $createOrder = Order::create([
    //         'user_id'=>$request->user_id,
    //         'product_id'=> $request-> product_id,
    //         'quantity'=>$request->quantity,
    //         'amount'=>$request->amount,
    //         'address'=>$request->address,
    //         'status' => $request -> status
    //     ]);
    //     return $createOrder;
    //     // return view('components.checkout')->with('order', $createOrder);
    // }
}