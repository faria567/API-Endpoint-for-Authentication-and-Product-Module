<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['brand', 'category', 'unit', 'tax', 'productQuantities', 'attachments'])->get();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::with(['brand', 'category', 'unit', 'tax', 'productQuantities', 'attachments'])->findOrFail($id);
        return response()->json($product);
    }

//     public function show($id)
// {
//     try {
//         $product = Product::with(['brand', 'category', 'unit', 'tax', 'productQuantities', 'attachments'])->findOrFail($id);
//         return response()->json($product);
//     } catch (ModelNotFoundException $e) {
//         return response()->json(['error' => 'Product not found'], 404);
//     }
}


    // Implement other CRUD methods (store, update, destroy)
}
