<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// Route to the create Product Form
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

// Route for the post the Product to the database
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

// Route to the Edit Product Form
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

// Route to Update the Products
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');

// Delete Product
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
