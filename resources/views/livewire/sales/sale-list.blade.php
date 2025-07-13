<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales List') }}
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-2 mt-8">
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-300">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">No.</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Product</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Price</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Quantity</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Discount</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Vat</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Earnings</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Payable</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Paid</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600 uppercase">Due</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    @if($sales->count())
                        @foreach ($sales as $key => $sale)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $key + 1 }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $sale->product->product_name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">৳ {{ number_format($sale->product->sell_price, 2) }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $sale->quantity }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">৳ {{ number_format($sale->discount, 2) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">৳ {{ number_format($sale->vat, 2) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">৳ {{ number_format($sale->subtotal, 2) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">৳ {{ number_format($sale->total, 2) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">৳ {{ number_format($sale->paid, 2) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">৳ {{ number_format($sale->due, 2) }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10" class="px-6 py-4 text-center text-sm text-gray-500">
                                No sale found.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
