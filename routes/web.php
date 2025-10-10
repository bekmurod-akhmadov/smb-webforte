<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

Route::group(
    [
        'middleware' => ['throttle:50,1'],
    ],
    function () {
        Route::get('/', [SiteController::class, 'index'])->name('home');
        Route::get('/about', [SiteController::class, 'about'])->name('about');
        Route::get('/search', [SiteController::class, 'search'])->name('search');

        Route::get('/{category:slug}', [CategoryController::class, 'show'])
            ->name('category.show');

        Route::get('/{category:slug}/{subcategory:slug}', [SubcategoryController::class, 'show'])
            ->name('subcategory.show');

        Route::get('/{category:slug}/{subcategory:slug}/{product:slug}', [ProductController::class, 'show'])
            ->name('product.show');


    }
);
