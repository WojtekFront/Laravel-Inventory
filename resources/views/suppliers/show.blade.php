@extends('layouts.app')
     @section('title', 'Supplier Details')
     @section('content')
         <h1 class="h3 mb-3">{{ $supplier->name }}</h1>
         <p><strong>ID:</strong> {{ $supplier->id }}</p>
         <p><strong>Email:</strong> {{ $supplier->email }}</p>
         <p><strong>Phone:</strong> {{ $supplier->phone }}</p>
         <p><strong>Address:</strong> {{ $supplier->address }}</p>
         <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Back</a>
     @endsection
