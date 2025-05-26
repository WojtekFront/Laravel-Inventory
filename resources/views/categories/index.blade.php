@extends('layouts.app')
     @section('title', 'Categories')
     @section('content')
         <h1 class="h3 mb-3">Categories</h1>
         <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add Category</a>
         <table class="table">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($categories as $category)
                     <tr>
                         <td>{{ $category->id }}</td>
                         <td>{{ $category->name }}</td>
                         <td>
                             <a href="{{ route('categories.show', $category) }}" class="btn btn-info btn-sm">View</a>
                             <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">Edit</a>
                             <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                             </form>
                         </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
         {{ $categories->links() }}
     @endsection
