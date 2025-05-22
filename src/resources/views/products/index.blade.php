@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Products</h1>
        <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create Product</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 text-left">Name</th>
                <th class="py-2 px-4 text-left">Price</th>
                <th class="py-2 px-4 text-left">Stock</th>
                <th class="py-2 px-4 text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr class="border-t">
                <td class="py-2 px-4">{{ $product->name }}</td>
                <td class="py-2 px-4">{{ number_format($product->price, 2) }} €</td>
                <td class="py-2 px-4">{{ $product->stock }}</td>
                <td class="py-2 px-4 text-right">
                    <a href="{{ route('products.show', $product) }}" class="text-blue-600 hover:underline">Show</a>
                    <a href="{{ route('products.edit', $product) }}" class="ml-2 text-yellow-600 hover:underline">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline ml-2" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center py-4 text-gray-500">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
