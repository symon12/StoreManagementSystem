<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    public function index()
    {
        $sales = Sale::all();
        $products = Product::all();
        return view('sales.index', compact('sales', 'products'));
    }

    public function store(Request $request)
    {
        $sale = Sale::create($request->all());

        // Update product quantity
        $product = Product::find($request->product_id);
        $product->quantity -= $request->quantity_sold;
        $product->save();

        return redirect()->route('sales.index');
    }

}