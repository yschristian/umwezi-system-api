<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});


Route::post("/contact/create",[\App\Http\Controllers\ContactController::class, 'store']);
Route::get("/contact/getAll",[\App\Http\Controllers\ContactController::class, 'index']);

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
    Route::post("/create",[\App\Http\Controllers\StripePaymentController::class, 'store']);
    Route::get("/getAll",[\App\Http\Controllers\orderController::class, 'index']);
    Route::get("/getOne/{order}",[\App\Http\Controllers\orderController::class, 'show']);
    Route::delete("/delete/{order}",[\App\Http\Controllers\orderController::class, 'destroy']);
    Route::patch("/update/{order}",[\App\Http\Controllers\orderController::class, 'update']);
    Route::get("/userOrder",[\App\Http\Controllers\orderController::class, 'UserOrder']);
});

Route::group(['middleware'=>['auth:sanctum']], function(){
Route::get("/user/getAll",[\App\Http\Controllers\Usercontroller::class, 'index']);
Route::get("/user/getone/{user}",[\App\Http\Controllers\Usercontroller::class, 'show']);
Route::patch("/user/update/{user}",[\App\Http\Controllers\Usercontroller::class, 'update']);
Route::delete("/user/delete/{user}",[\App\Http\Controllers\Usercontroller::class, 'destroy']);
Route::post("/user/edit/{user}",[\App\Http\Controllers\Usercontroller::class, 'edit']);
});
Route::post("/user/login",[\App\Http\Controllers\Usercontroller::class, 'login']);
Route::post("/user/create",[\App\Http\Controllers\Usercontroller::class, 'store']);
//home  
Route::get('/', function () {
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
Route::get("/userOrder",[\App\Http\Controllers\orderController::class, 'UserOrder']);
// Route::get('/userOrder', function () {
//     return view('components.userOrder');
// });
// Route::get('/cartItem', function () {
//     return view('components.Cart');
// });
// Route::POST("/cart/{id}",[\App\Http\Controllers\CartController::class,'addToCart']);

Route::get("/market",[\App\Http\Controllers\ProductController::class, 'marketAll']);
Route::get("/singleProduct/{id}",[\App\Http\Controllers\ProductController::class, 'marketOne']);
Route::get('/contact', function () {
    return view('components.contact');
});
Route::get("/logout",[\App\Http\Controllers\Usercontroller::class,'logout']);
Route::post('/checkout',[\App\Http\Controllers\StripePaymentController::class,'stripePost']);
Route::get('/confirmation', function () {
    return view('components.confirmation');
});
Route::get('/checkouts',[\App\Http\Controllers\StripePaymentController::class,'stripe'] );
Route::get('/partner', function () {
    return view('components.Partner');
});

Route::get('/cartItem', [\App\Http\Controllers\CartController::class, 'index'])
->name(name:'cart.index');
Route::post('/cart', [\App\Http\Controllers\CartController::class, 'store'])
->name(name:'cart.store');
Route::post('/remove', [\App\Http\Controllers\CartController::class, 'removeCart'])
->name(name:'cart.removeCart');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/order', function () {
    return view('components.Order');
});