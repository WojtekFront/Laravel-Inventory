@extends('layouts.app')
     @section('title', 'Suppliers')
     @section('content')
         <h1 class="h3 mb-3">Suppliers</h1>
         <a href="{{ route('suppliers.create') }}" class="btn btn-success mb-3">Add Supplier</a>
         <table class="table">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Address</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($suppliers as $supplier)
                     <tr>
                         <td>{{ $supplier->id }}</td>
                         <td>{{ $supplier->name }}</td>
                         <td>{{ $supplier->email }}</td>
                         <td>{{ $supplier->phone }}</td>
                         <td>{{ $supplier->address }}</td>
                         <td>
                             <a href="{{ route('suppliers.show', $supplier) }}" class="btn btn-info btn-sm">View</a>
                             <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-warning btn-sm">Edit</a>
                             <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" style="display:inline;">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                             </form>
                         </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
         {{ $suppliers->links() }}
     @endsection
