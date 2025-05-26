@extends('layouts.app')
     @section('title', 'Products')
     @section('content')
         <h1 class="h3 mb-3">Products</h1>
         <form method="GET" class="md-3">
             <div class="row">
                 <div class="col-md-4">
                     <select name="category_id" class="form-select">
                         <option value="">All Categories</option>
                         @foreach ($categories as $category)
                             <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                 {{ $category->name }}
                             </option>
                         @endforeach
                     </select>
                 </div>
                 <div class="col-md-4">
                     <input type="text" name="sku" class="form-control" placeholder="Search by SKU" value="{{ request('sku') }}">
                 </div>
                 <div class="col-md-4">
                     <button type="submit" class="btn btn-primary">Search</button>
                     <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
                     <a href="{{ route('products.export') }}" class="btn btn-secondary">Export CSV</a>
                 </div>
             </div>
         </form>

         <table class="table table-striped">
             <thead style="background-color: #ff3131 !imporant;">
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>SKU</th>
                     <th>Category</th>
                     <th>Price</th>
                     <th>Quantity</th>
                     <th>Actions</th>
                     <th>Comments</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($products as $product)
                     <tr>
                         <td>{{ $product->id }}</td>
                         <td>{{ $product->name }}</td>
                         <td>{{ $product->sku }}</td>
                         <td>{{ $product->category->name }}</td>
                         <td>{{ $product->price }}</td>
                         <td>{{ $product->quantity }}</td>
                         <td>
                             <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">View</a>
                             <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                             <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                             </form>

                         </td>
                         <td>
                             @if ($product->quantity < 5)
                                <button type="button" class="btn btn-danger btn-sm disabled">Low Stock</button>
                            @endif
                         </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
         {{ $products->links() }}
     @endsection
