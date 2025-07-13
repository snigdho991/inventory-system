<?php

use App\Http\Controllers\ProductController;
use App\Livewire\Products\AddProduct;
use App\Livewire\Products\ProductList;
use App\Livewire\Report\FinancialReport;
use App\Livewire\Sales\AddSale;
use App\Livewire\Sales\SaleList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
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
    Route::get('/sales/all', SaleList::class)->name('sales.all');
    Route::get('/financial-report', FinancialReport::class)->name('financial.report');


});
