<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products List') }}
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-300">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">No.</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Product Name</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Purchase Price</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Sell Price</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Stock</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    @if($products->count())
                        @foreach ($products as $key => $product)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $key + 1 }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $product->product_name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">৳ {{ number_format($product->purchase_price, 2) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">৳ {{ number_format($product->sell_price, 2) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $product->stock }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">
                                No product found.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
