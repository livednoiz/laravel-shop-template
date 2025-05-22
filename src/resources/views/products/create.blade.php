@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 font-medium">Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required value="{{ old('name') }}">
        </div>

        <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
        </div>

        <div>
            <label class="block mb-1 font-medium">Price (€)</label>
            <input type="number" name="price" step="0.01" class="w-full border rounded px-3 py-2" required value="{{ old('price') }}">
        </div>

        <div>
            <label class="block mb-1 font-medium">Stock</label>
            <input type="number" name="stock" class="w-full border rounded px-3 py-2" required value="{{ old('stock', 0) }}">
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save</button>
        <a href="{{ route('products.index') }}" class="ml-2 text-gray-600 hover:underline">Cancel</a>
    </form>
</div>
@endsection
