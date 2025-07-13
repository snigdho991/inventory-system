<?php

namespace App\Livewire\Sales;

use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class AddSale extends Component
{
    public $product;
    public $quantity = 1;
    public $discount;
    public $vat = 5;
    public $paid;

    protected $rules = [
        'product' => 'required',
        'quantity' => 'required|integer|min:0',
        'vat' => 'required|numeric|min:0',
        'paid' => 'required|numeric|min:0'
    ];

    public function render()
    {
        $products = Product::all();
        return view('livewire.sales.add-sale', compact('products'));
    }

    public function save() 
    {
        $this->validate();

        $find_product = Product::findOrFail($this->product);

        if ($find_product->stock > 0) {
            $discount = $this->discount ? $this->discount : 0;
            $vat = round(($find_product->sell_price * $this->quantity - $discount) * $this->vat / 100, 2);
            $subtotal = round(($find_product->sell_price * $this->quantity - $find_product->purchase_price * $this->quantity) - $discount, 2);
            $total = round($find_product->sell_price * $this->quantity + $vat - $discount, 2);
            $due = round($total - $this->paid, 2);

            Sale::create([
                'product_id' => $this->product,
                'quantity' => $this->quantity,
                'discount' => $discount,
                'vat' => $vat,
                'subtotal' => $subtotal,
                'total' => $total,
                'paid' => $this->paid,
                'due' => $due
            ]);

            $find_product->stock = $find_product->stock - $this->quantity;
            $find_product->save();

            session()->flash('message', 'Sale saved successfully!');

        } else {
            session()->flash('error', 'Product stock out!');
        }

        $this->reset();

    }
}
