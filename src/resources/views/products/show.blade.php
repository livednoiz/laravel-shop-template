@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">{{ $product->name }}</h1>

    <p><strong>Description:</strong> {{ $product->description ?? 'N/A' }}</p>
    <p><strong>Price:</strong> {{ number_format($product->price, 2) }} €</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>
    <p><strong>Created At:</strong> {{ $product->created_at->format('Y-m-d H:i') }}</p>

    <div class="mt-4">
        <a href="{{ route('products.edit', $product) }}" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
        <a href="{{ route('products.index') }}" class="ml-2 text-gray-600 hover:underline">Back</a>
    </div>
</div>
@endsection
