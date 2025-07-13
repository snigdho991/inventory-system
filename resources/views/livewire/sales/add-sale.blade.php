<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Sale') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto mt-8">
        <div class="bg-white shadow-xl rounded-2xl p-8">
            @if (session()->has('error'))
                <div class="text-red-600 mt-1 mb-4 text-center font-semibold">
                    {{ session('error') }}
                </div>
            @endif

            @if (session()->has('message'))
                <div class="text-green-600 mt-1 mb-4 text-center font-semibold">
                    {{ session('message') }}
                </div>
            @endif

            <form wire:submit.prevent="save" class="space-y-5">
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Product</label>
                    <select wire:model="product"
                        class="w-full border-gray-300 rounded-xl shadow-sm focus:border-blue-500 focus:ring-blue-500 transition duration-150">
                        <option value="">Select a product</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->product_name }} - {{ $product->sell_price }} TK</option>
                        @endforeach
                    </select>
                    @error('product') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Quantity</label>
                    <input type="number" wire:model="quantity" min="1" value="1"
                        class="w-full border-gray-300 rounded-xl shadow-sm focus:border-blue-500 focus:ring-blue-500 transition duration-150" />
                    @error('quantity') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Discount (TK)</label>
                        <input type="number" wire:model="discount" step="0.01"
                            class="w-full border-gray-300 rounded-xl shadow-sm" />
                        @error('discount') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">VAT (%)</label>
                        <input type="number" wire:model="vat"
                            class="w-full border-gray-300 rounded-xl shadow-sm" />
                        @error('vat') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Customer Paid (TK)</label>
                    <input type="number" wire:model="paid" step="0.01"
                        class="w-full border-gray-300 rounded-xl shadow-sm" />
                    @error('paid') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-xl transition duration-200 shadow-md">
                        Submit Sale
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
