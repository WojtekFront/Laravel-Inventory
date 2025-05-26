@extends('layouts.app')
     @section('title', 'Add Category')
     @section('content')
         <h1 class="h3 mb-3">Add Category</h1>
         <form method="POST" action="{{ route('categories.store') }}">
             @csrf
             <div class="mb-3">
                 <label class="form-label">Name</label>
                 <input type="text" name="name" class="form-control" required>
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
         </form>
     @endsection
