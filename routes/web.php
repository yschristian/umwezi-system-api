<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::prefix('product')->group(function(){
    Route::post("/create",[\App\Http\Controllers\ProductController::class, 'store']);
    Route::get("/getAll",[\App\Http\Controllers\ProductController::class, 'index']);
    Route::get("/getOne/{product}",[\App\Http\Controllers\ProductController::class, 'show']);
    Route::delete("/delete/{product}",[\App\Http\Controllers\ProductController::class, 'destroy']);
    Route::patch("/update/{product}",[\App\Http\Controllers\ProductController::class, 'update']);
    Route::get("/userProduct/{product}",[\App\Http\Controllers\ProductController::class, 'getUserProduct']);
});
Route::prefix('request')->group(function(){ 
    Route::post("/create",[\App\Http\Controllers\PartnerController::class, 'store']);
    Route::get("/getAll",[\App\Http\Controllers\PartnerController::class, 'index']);
    Route::get("/getOne/{request}",[\App\Http\Controllers\PartnerController::class, 'show']);
    Route::patch("/update/{request}",[\App\Http\Controllers\PartnerController::class, 'update']);
    Route::delete("/delete/{request}",[\App\Http\Controllers\PartnerController::class, 'destroy']);
    Route::post("/approve/{request}",[\App\Http\Controllers\PartnerController::class, 'approve']);
    
});
Route::prefix('order')->group(function(){
    Route::post("/create",[\App\Http\Controllers\orderController::class, 'store']);
    Route::get("/getAll",[\App\Http\Controllers\orderController::class, 'index']);
    Route::get("/getOne/{order}",[\App\Http\Controllers\orderController::class, 'show']);
    Route::delete("/delete/{order}",[\App\Http\Controllers\orderController::class, 'destroy']);
    Route::patch("/update/{order}",[\App\Http\Controllers\orderController::class, 'update']);
    Route::get("/userOrder/{order}",[\App\Http\Controllers\orderController::class, 'UserOrder']);
});

Route::prefix('user')->group(function(){

    Route::get("/getAll",[\App\Http\Controllers\Usercontroller::class, 'index']);
    Route::get("/getone/{user}",[\App\Http\Controllers\Usercontroller::class, 'show']);
    Route::post("/create",[\App\Http\Controllers\Usercontroller::class, 'store']);
    Route::patch("/update/{user}",[\App\Http\Controllers\Usercontroller::class, 'update']);
    Route::delete("/delete/{user}",[\App\Http\Controllers\Usercontroller::class, 'destroy']);
    Route::post("/login",[\App\Http\Controllers\Usercontroller::class, 'login']);
    Route::post("/edit/{user}",[\App\Http\Controllers\Usercontroller::class, 'edit']);
    });

//home  
Route::get('/home', function () {
    return view('components/index');
});

Route::get('/signup', function () {
    return view('components.signup');
});
Route::get('/forgot', function () {
    return view('components.forgotPassword');
});
Route::get('/userdashboard', function () {
    return view('components.userDashboard');
});
Route::get('/profiledetails', function () {
    return view('components.profileDetails');
});
Route::get('/userOrder', function () {
    return view('components.userOrder');
});
// Route::get('/cart', function () {
//     return view('components.Cart');
// });
// Route::post("/cart",[\App\Http\Controllers\CartController::class, 'addToCart']);


Route::get("/market",[\App\Http\Controllers\ProductController::class, 'marketAll']);
Route::get("/singleProduct/{id}",[\App\Http\Controllers\ProductController::class, 'marketOne']);
Route::get('/contact', function () {
    return view('components.contact');
});

Route::get('/checkout', function () {
    return view('components.checkout');
});
Route::get('/confirmation', function () {
    return view('components.confirmation');
});

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::POST('/cart', [CartController::class, 'addToCart']);
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');