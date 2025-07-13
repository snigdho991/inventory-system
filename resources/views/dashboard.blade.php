<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="px-16 text-center">
            <h2 class="text-2xl font-bold mb-4">Welcome to Inventory System</h2>
            <ul class="flex justify-center gap-8">
                <li><a href="" class="text-blue-500 hover:text-black duration-200">➕ Add New Product</a></li>
                <li><a href="" class="text-blue-500 hover:text-black duration-200">📦 Products List</a></li>
                <li><a href="" class="text-blue-500 hover:text-black duration-200">🛒 Create New Sale</a></li>
                <li><a href="" class="text-blue-500 hover:text-black duration-200">📊 View Reports</a></li>
            </ul>
        </div>
    </div>
</x-app-layout>
