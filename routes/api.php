<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user')->group(function(){

Route::get("/getAll",[\App\Http\Controllers\Usercontroller::class, 'index']);
Route::get("/getone/{user}",[\App\Http\Controllers\Usercontroller::class, 'show']);
Route::post("/create",[\App\Http\Controllers\Usercontroller::class, 'store']);
Route::patch("/update/{user}",[\App\Http\Controllers\Usercontroller::class, 'update']);
Route::delete("/delete/{user}",[\App\Http\Controllers\Usercontroller::class, 'destroy']);
Route::post("/login",[\App\Http\Controllers\Usercontroller::class, 'login']);

});
//requests

Route::prefix('request')->group(function(){ 
    Route::post("/create",[\App\Http\Controllers\PartnerController::class, 'store']);
    Route::get("/getAll",[\App\Http\Controllers\PartnerController::class, 'index']);
    Route::get("/getOne/{request}",[\App\Http\Controllers\PartnerController::class, 'show']);
    Route::patch("/update/{request}",[\App\Http\Controllers\PartnerController::class, 'update']);
    Route::delete("/delete/{request}",[\App\Http\Controllers\PartnerController::class, 'destroy']);
    
});

// products
Route::prefix('product')->group(function(){
    Route::post("/create",[\App\Http\Controllers\ProductController::class, 'store']);
    Route::get("/getAll",[\App\Http\Controllers\ProductController::class, 'index']);
    Route::get("/getOne/{product}",[\App\Http\Controllers\ProductController::class, 'show']);
    Route::delete("/delete/{product}",[\App\Http\Controllers\ProductController::class, 'destroy']);
    Route::patch("/update/{product}",[\App\Http\Controllers\ProductController::class, 'update']);
});