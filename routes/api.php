<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\client\CartController;
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

Route::get('/product/get-size/{color}/{product_id}', [ProductController::class, 'getSize'])->name('api.client.product.getSize');
//Route::prefix('cart')->group(function () {
//    Route::post('/add', [CartController::class, 'store'])->name('api.client.cart.add');
//    Route::patch('/update/{id}', [CartController::class, 'update'])->name('api.client.cart.update');
//    Route::delete('/remove{id}', [CartController::class, 'remove'])->name('api.client.cart.remove');
//});
