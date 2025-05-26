<?php

namespace App\Http\Controllers;

use App\Models\StockEntry;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

use Illuminate\Http\Request;

class StockEntryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware("auth");
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stockEntries = StockEntry::with(['product', 'supplier'])->paginate(10);
           return view('stock-entries.index', compact('stockEntries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('stock-entries.create', compact('products', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
               'product_id' => 'required|exists:products,id',
               'supplier_id' => 'required|exists:suppliers,id',
               'quantity' => 'required|integer|min:1',
               'received_date' => 'required|date',
           ]);

        $stockEntry = StockEntry::create($request->all());
           $product = Product::find($request->product_id);
           $product->quantity += $request->quantity;
           $product->save();

           return redirect()->route('stock-entries.index')->with('success', 'Stock entry added successfully');
       }
    }

