<?php

namespace App\Livewire\Sales;

use App\Models\Sale;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class SaleList extends Component
{
    public function render()
    {
        $sales = Sale::all();
        return view('livewire.sales.sale-list', compact('sales'));
    }
}
