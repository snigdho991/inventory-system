<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Financial Reort') }}
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-2 mt-8">
        <div class="flex gap-4 mb-8">
            <div class="w-1/2">
                <label class="block text-sm font-medium text-gray-700">From</label>
                <input type="date" wire:model.lazy="from" class="input w-full">
            </div>
            <div class="w-1/2">
                <label class="block text-sm font-medium text-gray-700">To</label>
                <input type="date" wire:model.lazy="to" class="input w-full">
            </div>
        </div>
    
        <div class="space-y-3 text-lg text-gray-800">
            <p><strong>Total Sales:</strong> ৳ {{ number_format($sales, 2) }}</p>
            <p><strong>Total Expenses:</strong> ৳ {{ number_format($expenses, 2) }}</p>
            <p><strong>Profit:</strong> ৳ {{ number_format($profit, 2) }}</p>
        </div>
    </div>
</div>
