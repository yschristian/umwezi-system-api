<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user')->group(function(){

Route::get("/getAll",[\App\Http\Controllers\Usercontroller::class, 'index']);
Route::get("/users/{user}",[\App\Http\Controllers\Usercontroller::class, 'show']);
Route::post("/create",[\App\Http\Controllers\Usercontroller::class, 'store']);
Route::patch("/users/{user}",[\App\Http\Controllers\Usercontroller::class, 'update']);
Route::delete("/users/{user}",[\App\Http\Controllers\Usercontroller::class, 'destroy']);

});
//requests

Route::prefix('request')->group(function(){ 
    Route::post("/create",[\App\Http\Controllers\PartnerController::class, 'store']);
    Route::get("/getAll",[\App\Http\Controllers\PartnerController::class, 'index']);
    Route::get("/getOne/{request}",[\App\Http\Controllers\PartnerController::class, 'show']);
    Route::patch("/update/{request}",[\App\Http\Controllers\PartnerController::class, 'update']);
    Route::delete("/delete/{request}",[\App\Http\Controllers\PartnerController::class, 'destroy']);
    
});

