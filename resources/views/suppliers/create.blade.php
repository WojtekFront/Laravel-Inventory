@extends('layouts.app')
     @section('title', 'Add Supplier')
     @section('content')
         <h1 class="h3 mb-3">Add Supplier</h1>
         <form method="POST" action="{{ route('suppliers.store') }}">
             @csrf
             <div class="mb-3">
                 <label class="form-label">Name</label>
                 <input type="text" name="name" class="form-control" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Email</label>
                 <input type="email" name="email" class="form-control" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Phone</label>
                 <input type="text" name="phone" class="form-control" required>
             </div>
             <div class="mb-3">
                 <label class="form-label">Address</label>
                 <input type="text" name="address" class="form-control" required>
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
         </form>
     @endsection
