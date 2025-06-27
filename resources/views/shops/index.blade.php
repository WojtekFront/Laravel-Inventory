@extends('layouts.app')
@section('title', 'Shops')

@section('content')
    <h1>Shops</h1>
    @auth
        <a href="{{route('shops.create')}}" class="btn btn-primary mb-3">Add New Shop</a>
    @endauth

    @if ($shops->isEmpty())
        <p>No active shops available.</p>
    @else
        <p>Active shops found: {{ $shops->count() }} .</p>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shops as $shop)
                <tr>
                    <td>{{ $shop->id }}</td>
                    <td>{{ $shop->name }}</td>
                    <td>{{ $shop->address ??'N/A'}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
