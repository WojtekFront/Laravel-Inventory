@extends('layouts.app')
     @section('title', 'Edit Supplier')
     @section('content')
         <h1 class="h3 mb-3">Edit Supplier</h1>
         <form method="POST" action="{{ route('suppliers.update', $supplier) }}">
             @csrf
             @method('PUT')
             <div class="mb-3">
                 <label class="form-label">Name</label>
                 <input type="text" name="name" class="form-control" value="{{ $supplier->name }}" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Email</label>
                 <input type="email" name="email" class="form-control" value="{{ $supplier->email }}" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Phone</label>
                 <input type="text" name="phone" class="form-control" value="{{ $supplier->phone }}" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Address</label>
                 <input type="text" name="address" class="form-control" value="{{ $supplier->address }}" required>
             </div>
             <button type="submit" class="btn btn-primary">Update</button>
         </form>
     @endsection
