@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p><strong>SKU:</strong> {{ $product->sku }}</p>
    <p><strong>Category:</strong> {{ $product->category->name }}</p>
    <p><strong>Price:</strong> {{ $product->formated_price }}</p>
    <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
    <p><strong>Description:</strong> {{ $product->description ?? 'N/A' }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a>
@endsection
