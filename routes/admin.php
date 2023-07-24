<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
//Route::get('/admin', function () {
//    return redirect(route('admin.auth.login'));
//});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'adminLogin'])->name('admin.auth.login');
    Route::post('/callback', [AuthController::class, 'adminCheck'])->name('admin.auth.check');
});

Route::any('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

Route::prefix('category')->middleware('role_super_admin')->group(function () {
    Route::get('/add', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/update', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/{id}/destroy', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    Route::get('/list', [CategoryController::class, 'index'])->name('admin.category.show');
});

Route::prefix('product')->middleware('role_super_admin')->group(function () {
    Route::get('/add', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('/{id}/destroy', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    Route::get('/list', [ProductController::class, 'index'])->name('admin.product.show');
    Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('admin.product.detail');

    Route::post('/un-hot/{id}', [ProductController::class, 'un_hot'])->name('admin.product.un.hot');
    Route::post('/re-hot/{id}', [ProductController::class, 're_hot'])->name('admin.product.re.hot');
    Route::post('/un-status/{id}', [ProductController::class, 'un_status'])->name('admin.product.un.status');
    Route::post('/re-status/{id}', [ProductController::class, 're_status'])->name('admin.product.re.status');
});

