<?php

use App\Http\Controllers\ProductController;
use App\Livewire\AddProduct;
use App\Livewire\ProductList;
use App\Livewire\Sales\AddSale;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/product/new', AddProduct::class)->name('products.create');
    Route::get('/products/all', ProductList::class)->name('products.all');
    Route::get('/sale/create', AddSale::class)->name('sale.create');
});
