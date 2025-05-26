@extends('layouts.app')
     @section('title', 'Edit Product')
     @section('content')
         <h1 class="h3 mb-3">Edit Product</h1>
         <form method="POST" action="{{ route('products.update', $product) }}">
             @csrf
             @method('PUT')
             <div class="mb-3">
                 <label class="form-label">Name</label>
                 <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">SKU</label>
                 <input type="text" name="sku" class="form-control" value="{{ $product->sku }}" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Description</label>
                 <textarea name="description" class="form-control">{{ $product->description }}</textarea>
             </div>
             <div class="mb-3">
                 <label class="form-label">Price</label>
                 <input type="number" name="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Quantity</label>
                 <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Category</label>
                 <select name="category_id" class="form-select" required>
                     @foreach ($categories as $category)
                         <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                             {{ $category->name }}
                         </option>
                     @endforeach
                 </select>
             </div>
             <button type="submit" class="btn btn-primary">Update</button>
         </form>
     @endsection
