<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\PlacementController;

Route::get('/', [ProductController::class, 'webIndex'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/products/create', [ProductController::class, 'create'])->middleware(['auth', 'verified'])->name('product.create');
Route::get('/products/{id}', [ProductController::class, 'webShow'])->middleware(['auth','verified'])->name('web.product.show');
Route::post('/products', [ProductController::class, 'store'])->middleware(['auth','verified'])->name('product.store');
Route::get('/products/{id}/edit',[ProductController::class, 'edit'])->middleware(['auth','verified'])->name('product.edit');
Route::put('/products/{id}',[ProductController::class, 'update'])->middleware(['auth', 'verified'])->name('product.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/api')->group(function(){
    Route::prefix('/products')->group(function() {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/search', [ProductController::class, 'search'])->name('product.search');
        Route::get('/{id}', [ProductController::class, 'show'])->name('product.show');
    });

    Route::prefix('/categories')->group(function() {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('category.show');
    });

    Route::prefix('/room-types')->group(function() {
        Route::get('/', [RoomTypeController::class, 'index'])->name('roomtype.index');
    });

    Route::prefix('/placements')->group(function() {
        Route::get('/', [PlacementController::class, 'index'])->name('placement.index');
        Route::get('/{id}', [PlacementController::class, 'show'])->name('placement.show');
        Route::post('/', [PlacementController::class, 'store'])->name('placement.store');
        Route::put('/', [PlacementController::class, 'update'])->name('placement.update');
        Route::delete('/{id}', [PlacementController::class, 'destroy'])->name('placement.destroy');
    });

    Route::prefix('/ideas')->group(function() {
        Route::get('/', [IdeaController::class, 'index'])->name('idea.index');
        Route::post('/', [IdeaController::class, 'store'])->name('idea.store');
        Route::get('/{id}', [IdeaController::class, 'show'])->name('idea.show');
        Route::delete('/{id}', [IdeaController::class, 'destroy'])->name('idea.destroy');
    });
});

require __DIR__.'/auth.php';
