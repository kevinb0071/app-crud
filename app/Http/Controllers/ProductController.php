<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get the product page
    public function index() {
        return view('products.index');
    }

    // Show the Product Form
    public function create() {
        return view('products.create');
    }
    
    // Create the store to insert into Product table
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }
}
