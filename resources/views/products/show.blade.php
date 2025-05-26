@extends('layouts.app')
     @section('title', 'Product Details')
     @section('content')

        <h1 class="h3 mb-3">{{ $product->name }}</h1>

         <p><strong>SKU:</strong> {{ $product->sku }}</p>
         <p><strong>Description:</strong> {{ $product->description }}</p>
         <p><strong>Price:</strong> {{ $product->price }}</p>
         <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
         <p><strong>Category:</strong> {{ $product->category->name }}</p>
         <h4 class="mt-4">Stock History</h4>
         <table class="table">
             <thead>
                 <tr>
                     <th>Quantity</th>
                     <th>Received Date</th>
                     <th>Supplier</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($stockEntries as $entry)
                     <tr>
                         <td>{{ $entry->quantity }}</td>
                         <td>{{ $entry->received_date }}</td>
                         <td>{{ $entry->supplier->name }}</td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
         <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
     @endsection
