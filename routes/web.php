<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomTypeController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/api')->group(function(){
    Route::prefix('/products')->group(function() {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/{id}', [ProductController::class, 'show'])->name('product.show');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    });

    Route::prefix('/categories')->group(function() {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('category.show');
    });

    Route::prefix('/room-types')->group(function() {
        Route::get('/', [RoomTypeController::class, 'index'])->name('roomtype.index');
    });
});
