<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
<<<<<<< HEAD

=======
use App\Models\User;
>>>>>>> f5bb6957b39aa4fa35f8f9f7e70c95b579973614
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
    }

<<<<<<< HEAD

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
=======
    public function index(){
        $orders = Order::all();
        return $orders;
    }
    
    public function show($id){
        $order = Order::find($id);
        return $order;
>>>>>>> f5bb6957b39aa4fa35f8f9f7e70c95b579973614
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
