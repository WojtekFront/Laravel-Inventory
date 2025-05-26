@extends('layouts.app')
     @section('title', 'Add Stock Entry')
     @section('content')
         <h1 class="h3 mb-3">Add Stock Entry</h1>
         <form method="POST" action="{{ route('stock-entries.store') }}">
             @csrf
             <div class="mb-3">
                 <label class="form-label">Product</label>
                 <select name="product_id" class="form-select" required>
                     @foreach ($products as $product)
                         <option value="{{ $product->id }}">{{ $product->name }} (SKU: {{ $product->sku }})</option>
                     @endforeach
                 </select>
             </div>
             <div class="mb-3">
                 <label class="form-label">Supplier</label>
                 <select name="supplier_id" class="form-select" required>
                     @foreach ($suppliers as $supplier)
                         <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                     @endforeach
                 </select>
             </div>
             <div class="mb-3">
                 <label class="form-label">Quantity</label>
                 <input type="number" name="quantity" class="form-control" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Received Date</label>
                 <input type="date" name="received_date" class="form-control" required>
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
         </form>
     @endsection
