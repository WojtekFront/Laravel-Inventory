@extends('layouts.app')
     @section('title', 'Edit Category')
     @section('content')
         <h1 class="h3 mb-3">Edit Category</h1>
         <form method="POST" action="{{ route('categories.update', $category) }}">
             @csrf
             @method('PUT')
             <div class="mb-3">
                 <label class="form-label">Name</label>
                 <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
             </div>
             <button type="submit" class="btn btn-primary">Update</button>
         </form>
     @endsection
