<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Product;

class ProductController extends Controller
{
    
    public function store(Product $request){
        
        $product = Product::create($request -> all());
        return $product;
    }

}
