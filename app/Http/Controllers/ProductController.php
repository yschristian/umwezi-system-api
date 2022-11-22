<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProductController extends Controller
{   
    public function store(Request $request){

        $images= array();
        $image = $request->file("Image");
        foreach($image as $img)
        {
            $imageUrl = cloudinary()->upload($img->getRealPath())->getSecurePath();
            array_push($images,$imageUrl);
        }

        $product = Product::create([
            
            'Title' => $request -> Title,
            'Description' => $request -> Description,
            'Image' => $images,
            'Categories' => $request -> Categories,
            'Price' =>$request -> Price,
            'Address'=>$request -> Address,
            'user_id'=>$request -> user_id,
        ]);
        return $product;
        //  return view('product')->with('products',$product);
    }

    public function index(){
        $products = Product::all();
        //return $products;
        return view('product')->with('product',$products);
    }
    public function showLatest(){
        $product = Product::latest()->latest()->paginate(5);
        return view('components.index')->with('product',$products);

    }
    public function marketAll(){
        $products = Product::all();
        // return $products;
        return view('components.Market')->with('products',$products);
    }
    public function marketOne($id){
        $product = Product::find($id);
        // return $products;
        return view('components.singleProduct')->with('product',$product);
    }
    public function show($id){
        $product = Product::find($id);
        // return $product;
        return view('ViewProduct')->with('product', $product);
    }
    // public function cart($id){
    //     $cart = Product::find($id);
    //     // return $product;
    //     return view('Cart')->with('cart', $product);
    // }
    // public function getOne($id){
    //     $product = Product::find($id);
    //     // return $product;
    //     return view('singleProduct')->with('product', $product);
    // }

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
