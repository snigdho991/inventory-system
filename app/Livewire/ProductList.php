<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class ProductList extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.product-list', compact('products'));
    }
}
