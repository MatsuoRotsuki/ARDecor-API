<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/products')->group(function() {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
});
