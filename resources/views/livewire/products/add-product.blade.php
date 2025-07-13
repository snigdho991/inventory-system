<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Product') }}
        </h2>
    </x-slot>

    <div class="max-w-lg mx-auto mt-8">
        <div class="bg-white shadow-xl rounded-2xl p-8">
            @if (session()->has('message'))
                <div class="text-green-600 mt-1 mb-4 text-center font-semibold">
                    {{ session('message') }}
                </div>
            @endif

            <h2 class="text-xl font-semibold text-gray-800 mb-4">Product Information</h2>

            <form wire:submit.prevent="save" class="space-y-4">
                @csrf
                
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Product Name</label>
                    <input type="text" wire:model="product_name" placeholder="Enter product name"
                        class="w-full border-gray-300 rounded-xl shadow-sm focus:border-blue-500 focus:ring-blue-500 transition duration-150" />
                    @error('product_name') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Purchase Price (TK)</label>
                    <input type="number" wire:model="purchase_price" placeholder="e.g. 100"
                        class="w-full border-gray-300 rounded-xl shadow-sm focus:border-blue-500 focus:ring-blue-500 transition duration-150" />
                    @error('purchase_price') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Sell Price (TK)</label>
                    <input type="number" wire:model="sell_price" placeholder="e.g. 200"
                        class="w-full border-gray-300 rounded-xl shadow-sm focus:border-blue-500 focus:ring-blue-500 transition duration-150" />
                    @error('sell_price') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Opening Stock</label>
                    <input type="number" wire:model="stock" placeholder="e.g. 50"
                        class="w-full border-gray-300 rounded-xl shadow-sm focus:border-blue-500 focus:ring-blue-500 transition duration-150" />
                    @error('stock') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition duration-200 shadow-md">
                        Save Product
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
