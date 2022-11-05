<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{   
    public function store(Request $request){

        $imageUrl = cloudinary()->upload($request->file('Image')->getRealPath())->getSecurePath();
        $product = Product::create([
            'Title' => $request -> Title,
            'Description' => $request -> Description,
            'Image' => $imageUrl,
            'Categories' => $request -> Categories,
            'Price' =>$request -> Price,
            'Address'=>$request -> Address,
            'user_id'=>$request -> user_id,
        ]);
        return $product;
    }

    public function index(){
        $products = Product::all();
        return $products;
    }
    
    public function show($id){
        $product = Product::find($id);
        return $product;
    }

    public function destroy($id){
        $user = Product::destroy($id);
        $response="product deleted";
        return response($user);
    }

    public function update(Request $request,$id){
        $product = Product::find($id);
        $input = $request->all();
        $product-> update($input);
        return $product;
    }

    public function getUserProduct($userId){
        $products = User::find($userId)->produts;
        foreach($products as $product){
          $product = Product::all();
          return $product;
        }
    }
}
