<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get the product page
    public function index() {
        return view('products.index');
    }

    public function create() {
        return view('products.create');
    }
}
