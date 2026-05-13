<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;

Route::prefix('admin')->group(function() {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tag', TagController::class);
});