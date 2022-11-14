<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
class OrderController extends Controller
{
    public function store(Request $request)
    {
        $createOrder = Order::create([
            'user_id'=>$request->user_id,
            'product_id'=> $request-> product_id,
            'quantity'=>$request->quantity,
            'amount'=>$request->amount,
            'address'=>$request->address,
            'status' => $request -> status
        ]);
        return $createOrder;
        // return view('order')->with('order', $createOrder);
    }

    public function index(){
        $orders = Order::with('product')->get();
        //  return $orders;
        return view('order')->with('orders',$orders);
    }
    
    public function show($id){
        $order = Order::find($id);
        return $order;
    }

    public function destroy($id){
        $order = Order::destroy($id);
        return $order;
    }
    

    public function update(Request $request,$id){
        $order = Order::find($id);
        $input = $request->all();
        $order-> update($input);
        return $order;
    }
    public function UserOrder($userId){
        $orders = User::find($userId)-> orders;
        foreach($orders as $order){
            $orders = Order::all();
            return $orders;
          }
    }
}
