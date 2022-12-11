<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::get("/user/getAll",[\App\Http\Controllers\Usercontroller::class, 'index']);
    Route::get("/user/getone/{user}",[\App\Http\Controllers\Usercontroller::class, 'show']);
    Route::patch("/user/update/{user}",[\App\Http\Controllers\Usercontroller::class, 'update']);
    Route::delete("/user/delete/{user}",[\App\Http\Controllers\Usercontroller::class, 'destroy']);
    Route::post("/user/edit/{user}",[\App\Http\Controllers\Usercontroller::class, 'edit']);
    });
    Route::post("/user/create",[\App\Http\Controllers\Usercontroller::class, 'store']);
    Route::post("/user/login",[\App\Http\Controllers\Usercontroller::class, 'login']);


//requests


    Route::post("/request/create",[\App\Http\Controllers\PartnerController::class, 'store']);
    Route::get("/request/getAll",[\App\Http\Controllers\PartnerController::class, 'index']);
    Route::get("/request/getOne/{request}",[\App\Http\Controllers\PartnerController::class, 'show']);
    Route::patch("/request/update/{request}",[\App\Http\Controllers\PartnerController::class, 'update']);
    Route::delete("/request/delete/{request}",[\App\Http\Controllers\PartnerController::class, 'destroy']);
    Route::post("/request/approve/{request}",[\App\Http\Controllers\PartnerController::class, 'approve']);


// products
//['middleware' => 'auth'],

    Route::post("/product/create",[\App\Http\Controllers\ProductController::class, 'store']);
    Route::get("/product/getAll",[\App\Http\Controllers\ProductController::class, 'index']);
    Route::get("/product/getOne/{product}",[\App\Http\Controllers\ProductController::class, 'show']);
    Route::delete("/product/delete/{product}",[\App\Http\Controllers\ProductController::class, 'destroy']);
    Route::patch("/product/update/{product}",[\App\Http\Controllers\ProductController::class, 'update']);
    Route::get("/product/userProduct/{product}",[\App\Http\Controllers\ProductController::class, 'getUserProduct']);
    Route::get("/product/latest",[\App\Http\Controllers\ProductController::class, 'showLatest']);


//order 
Route::prefix('order')->group(function(){
    Route::post("/create",[\App\Http\Controllers\orderController::class, 'store']);
    Route::get("/getAll",[\App\Http\Controllers\orderController::class, 'index']);
    Route::get("/getOne/{order}",[\App\Http\Controllers\orderController::class, 'show']);
    Route::delete("/delete/{order}",[\App\Http\Controllers\orderController::class, 'destroy']);
    Route::patch("/update/{order}",[\App\Http\Controllers\orderController::class, 'update']);
    Route::get("/UserOrder/{order}",[\App\Http\Controllers\orderController::class, 'UserOrder']);
});
//contact

Route::prefix('contact')->group(function(){
    Route::post("/create",[\App\Http\Controllers\ContactController::class, 'store']);
    Route::get("/getAll",[\App\Http\Controllers\ContactController::class, 'index']);
    Route::get("/getOne/{contact}",[\App\Http\Controllers\ContactController::class, 'destroy']);
});

