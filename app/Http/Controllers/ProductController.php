<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index() {
      $products = Product::latest()->get();
      return view('products.index', ['products' => $products]);
   }

   public function show($id) {
       $product = Product::findOrFail($id);

        return view('products.show', ['product' => $product]);
    }

   public function create() {
      return view('products.create');
   }

   public function store() {
      request()->validate([
         'name' => 'required|min:3',
         'description' => 'required'
      ]);

     $product = new Product();

     $product->name = request('name');
     $product->description = request('description');

     $product->save();

     return redirect('/products');
   }

   public function edit(Product $product) {
      
      return view('products.edit', compact('product'));
   }

   public function update($id) {
      request()->validate([
         'name' => 'required|min:3',
         'description' => 'required'
      ]);

      $product = Product::fifindOrFailnd($id);

      $product->name = request('name');
      $product->description = request('description');

      $product->save();

      return redirect('/products/' . $product->id);
   }
}
