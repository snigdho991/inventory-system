<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class AddProduct extends Component
{
    public $product_name;
    public $purchase_price;
    public $sell_price;
    public $stock;

    protected $rules = [
        'product_name' => 'required|string|max:255',
        'purchase_price' => 'required|numeric|min:0',
        'sell_price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
    ];

    public function render()
    {
        return view('livewire.products.add-product');
    }

    public function save()
    {
        $this->validate();

        Product::create([
            'product_name' => $this->product_name,
            'purchase_price' => $this->purchase_price,
            'sell_price' => $this->sell_price,
            'stock' => $this->stock,
        ]);

        session()->flash('message', 'Product saved successfully!');

        $this->reset();
    }
}
