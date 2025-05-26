<!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="csrf-token" content="{{ csrf_token() }}">
       <title>{{ config('app.name', 'Inventory System') }} - @yield('title')</title>
       @vite(['resources/css/app.css', 'resources/js/app.js'])
       {{-- @import 'bootstrap/dist/css/bootstrap.min.css'; --}}


   </head>
   <body>
       @include('layouts.navigation')
       <div class="container-fluid">
           <div class="row">
               <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                   <div class="sidebar-sticky">
                       <ul class="nav flex-column">
                           <li class="nav-item">
                               <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                   Dashboard
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" href="{{ route('products.index') }}">
                                   Products
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}" href="{{ route('categories.index') }}">
                                   Categories
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ request()->routeIs('suppliers.*') ? 'active' : '' }}" href="{{ route('suppliers.index') }}">
                                   Suppliers
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ request()->routeIs('stock-entries.*') ? 'active' : '' }}" href="{{ route('stock-entries.index') }}">
                                   Stock Entries
                               </a>
                           </li>
                       </ul>
                   </div>
               </nav>
               <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                   @if (session('success'))
                       <div class="alert alert-success">
                           {{ session('success') }}
                       </div>
                   @endif
                   @yield('content')
               </main>
           </div>
       </div>
   </body>
   </html>
