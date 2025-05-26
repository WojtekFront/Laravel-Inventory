@extends('layouts.app')
     @section('title', 'Category Details')
     @section('content')
         <h1 class="h3 mb-3">{{ $category->name }}</h1>
         <p><strong>ID:</strong> {{ $category->id }}</p>
         <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
     @endsection
