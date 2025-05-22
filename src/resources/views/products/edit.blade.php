@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>

    <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-medium">Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required value="{{ old('name', $product->name) }}">
        </div>

        <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description', $product->description) }}</textarea>
        </div>

        <div>
            <label class="block mb-1 font-medium">Price (€)</label>
            <input type="number" name="price" step="0.01" class="w-full border rounded px-3 py-2" required value="{{ old('price', $product->price) }}">
        </div>

        <div>
            <label class="block mb-1 font-medium">Stock</label>
            <input type="number" name="stock" class="w-full border rounded px-3 py-2" required value="{{ old('stock', $product->stock) }}">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        <a href="{{ route('products.index') }}" class="ml-2 text-gray-600 hover:underline">Cancel</a>
    </form>
</div>
@endsection
