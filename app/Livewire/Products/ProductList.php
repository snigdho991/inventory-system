<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class ProductList extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.products.product-list', compact('products'));
    }
}
