<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Product;

class ProductController extends Controller
{
    
    public function store(Product $request){
        
        $product = Product::create([
            'Title' => $request -> Title,
            'Description' => $request -> Description,
            'Image' => $request -> Image,
            'Categories' => $request -> Categories,
            'Price' =>$request -> Price,
            'Address'=>$request -> Address
        ]);
        return $product;
    }

    // public function index(){

    //     $product = Product::
    // }

}
