<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\client\DashboardController;
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
Route::prefix('doashboard')->group(function () {
    Route::post('/order-detail', [DashboardController::class, 'orderDetail'])->name('api.client.dashboard.orderDetail');
});


