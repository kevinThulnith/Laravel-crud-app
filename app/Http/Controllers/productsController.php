<?php


namespace App\Http\Controllers;

use App\Models\products;

use Illuminate\Http\Request;

class productsController extends Controller
{
  public function index()
  {
    $products = products::all();
    return view('products.index', ['products' => $products]);
  }

  public function create()
  {
    return view('products.create');
  }

  public function store(Request $req)
  {
    $data = $req->validate([
      'name' => 'required|string|max:255',
      'price' => 'required|decimal:0,2',
      'quantity' => 'required|numeric',
      'description' => 'required',
    ]);

    products::create($data);

    return redirect(route('products.index'));
  }

  public function delete(products $product)
  {
    $product->delete();
    return redirect(route('products.index'))->with('success', 'Product deleted successfully!!');
  }

  public function edit(products $product)
  {
    return view('products.edit', ['product' => $product]);
  }

  public function update(products $product, Request $req)
  {
    $data = $req->validate([
      'name' => 'required|string|max:255',
      'price' => 'required|decimal:0,2',
      'quantity' => 'required|numeric',
      'description' => 'required',
    ]);

    $product->update($data);
    return redirect(route('products.index'))->with('success', 'Product updated successfully!!');
  }
}
