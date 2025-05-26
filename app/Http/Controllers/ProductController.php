<?php

   namespace App\Http\Controllers;

   use App\Models\Product;
   use App\Models\Category;
   use Illuminate\Http\Request;

   class ProductController extends Controller
   {
       public function index(Request $request)
       {
           $query = Product::query();

           if ($request->has('category_id') && $request->category_id) {
               $query->where('category_id', $request->category_id);
           }
           if ($request->has('sku') && $request->sku) {
               $query->where('sku', 'like', '%'.$request->sku.'%');
           }

           $products = $query->with('category')->paginate(10);
           $categories = Category::all();

           return view('products.index', compact('products', 'categories'));
       }

       public function create()
       {
           $categories = Category::all();
           return view('products.create', compact('categories'));
       }

       public function store(Request $request)
       {
           $request->validate([
               'name' => 'required|string|max:255',
               'sku' => 'required|string|unique:products,sku',
               'description' => 'nullable|string',
               'price' => 'required|numeric|min:0',
               'quantity' => 'required|integer|min:0',
               'category_id' => 'required|exists:categories,id',
           ]);
           Product::create($request->all());
           return redirect()->route('products.index')->with('success', 'Product added successfully!');
       }

       public function show(Product $product)
       {
           $stockEntries = $product->stockEntries()->with('supplier')->get();
           return view('products.show', compact('product', 'stockEntries'));
       }

       public function edit(Product $product)
       {
           $categories = Category::all();
           return view('products.edit', compact('product', 'categories'));
       }

       public function update(Request $request, Product $product)
       {
           $request->validate([
               'name' => 'required|string|max:255',
               'sku' => 'required|string|unique:products,sku,' . $product->id,
               'description' => 'nullable|string',
               'price' => 'required|numeric|min:0',
               'quantity' => 'required|integer|min:0',
               'category_id' => 'required|exists:categories,id',
           ]);

           $product->update($request->all());

           return redirect()->route('products.index')->with('success', 'Product updated successfully');
       }

       public function destroy(Product $product)
       {
           $product->delete();
           return redirect()->route('products.index')->with('success', 'Product deleted successfully');
       }

       public function export()
       {
           $products = Product::with('category')->get();
           $csv = "ID,Nazwa,SKU,Kategoria,Cena,Ilość\n";

           foreach ($products as $product) {
               $csv .= "{$product->id},{$product->name},{$product->sku},{$product->category->name},{$product->price},{$product->quantity}\n";
           }

           return response($csv)
               ->header('Content-Type', 'text/csv')
               ->header('Content-Disposition', 'attachment; filename="products.csv"');
       }
   }
