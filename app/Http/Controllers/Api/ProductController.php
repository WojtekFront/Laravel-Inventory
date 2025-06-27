<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(Request $request)
    {
    }

    public function create()
    {

    }

    public function store(Request $request):JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:products,sku',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::create($request->validated());
        return response()->json([
            'message' => 'Product added successfully',
            'product' => $product,
        ], 201);
    }

    public function show(Product $product)
    {

    }

    public function edit(Product $product)
    {
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
        // return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        return response()->json([
            'message'=> 'Product added succefully',
            'product' =>$product,
        ], 201);
    }

    public function destroy(Product $product):JsonResponse
    {
        $product->delete();
        // return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
        return response()->json([
            'message' =>'Product deleted successfully',
        ],200);
    }

    public function export()
    {
        try {
            $products = Product::with('category')->get();
            if ($products->isEmpty()) {
                return redirect()->route('products.index')->with('error', 'No products found to export.');
            }

            $headers = [
                'Content-Type' => 'text/csv; charset=UTF-8',
                'Content-Disposition' => 'attachment; filename="products.csv"',
                'Content-Encoding' => 'UTF-8',
            ];

            $callback = function () use ($products) {
                $file = fopen('php://output', 'w');
                fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF)); // UTF-8 BOM
                fputcsv($file, ['ID', 'Name', 'SKU', 'Category', 'Price', 'Quantity']);

                foreach ($products as $product) {
                    $categoryName = $product->category ? $product->category->name : 'No Category';
                    fputcsv($file, [
                        $product->id,
                        $product->name,
                        $product->sku,
                        $categoryName,
                        $product->formated_price,
                        $product->quantity,
                    ]);
                }

                fclose($file);
            };

            return response()->stream($callback, 200, $headers);
        } catch (\Exception $e) {
            \Log::error('Export error: ' . $e->getMessage());
            return redirect()->route('products.index')->with('error', 'Failed to export products.');
        }
    }
}
