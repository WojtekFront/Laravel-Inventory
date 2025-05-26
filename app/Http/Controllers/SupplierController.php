<?php

   namespace App\Http\Controllers;

   use App\Models\Supplier;
   use Illuminate\Http\Request;

   class SupplierController extends Controller
   {
       public function __construct()
       {
           $this->middleware('auth');
       }

       public function index()
       {
           $suppliers = Supplier::paginate(10);
           return view('suppliers.index', compact('suppliers'));
       }

       public function create()
       {
           return view('suppliers.create');
       }

       public function store(Request $request)
       {
           $request->validate([
               'name' => 'required|string|max:255',
               'email' => 'email|unique:suppliers,email',
               'phone' => 'required|string|max:20',
               'address' => 'required|string|max:255',
           ]);
           Supplier::create($request->all());
           return redirect()->route('suppliers.index')->with('success', 'Supplier added successfully');
       }

       public function show(Supplier $supplier)
       {
           return view('suppliers.show', compact('supplier'));
       }

       public function edit(Supplier $supplier)
       {
           return view('suppliers.edit', compact('supplier'));
       }

       public function update(Request $request, Supplier $supplier)
       {
           $request->validate([
               'name' => 'required|string|max:255',
               'email' => 'email|unique:suppliers,email,' ,
               'phone' => 'required|string|max:20',
               'address' => 'required|string|max:255',
           ]);
           $supplier->update($request->all());
           return redirect()->route('suppliers.index')->with('success', 'Supplier updated successfully');
       }

       public function destroy(Supplier $supplier)
       {
           $supplier->delete();
           return redirect()->route('suppliers.index')->with('success', 'Supplier deleted successfully');
       }
   }
