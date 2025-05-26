@extends('layouts.app')
    @section('title', 'Stock Entries')
    @section('content')
    <h1 class="h3 mb-3">Stock Entries</h1>
    <a href="{{ route('stock-entries.create')}}" class="btn btn-success mb-3">Add Stock Entry</a>

    <table class="table">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Product</th>
                     <th>Supplier</th>
                     <th>Quantity</th>
                     <th>Received Date</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($stockEntries as $entry)
                     <tr>
                         <td>{{ $entry->id }}</td>
                         <td>{{ $entry->product->name }}</td>
                         <td>{{ $entry->supplier->name }}</td>
                         <td>{{ $entry->quantity }}</td>
                         <td>{{ $entry->received_date }}</td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
         {{ $stockEntries->links() }}
     @endsection
