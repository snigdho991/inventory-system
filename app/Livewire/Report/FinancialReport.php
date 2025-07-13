<?php

namespace App\Livewire\Report;

use App\Models\Sale;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class FinancialReport extends Component
{
    public $from;
    public $to;

    public function render()
    {
        if (!$this->from) {
            $this->from = Carbon::now()->startOfMonth()->toDateString();
        }

        if (!$this->to) {
            $this->to = Carbon::now()->endOfMonth()->toDateString();
        }

        $sales = Sale::whereBetween('created_at', [$this->from, $this->to])
            ->sum('sales');

        $expenses = Sale::whereBetween('created_at', [$this->from, $this->to])
            ->sum('expenses');

        $profit = Sale::whereBetween('created_at', [$this->from, $this->to])
            ->sum('subtotal');

        return view('livewire.report.financial-report', [
            'sales' => $sales,
            'expenses' => $expenses,
            'profit' => $profit,
        ]);
    }
}
