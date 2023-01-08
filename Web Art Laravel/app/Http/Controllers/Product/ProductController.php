<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin')->except(['index', 'show']);
    }

    public function index()
    {
        $products = Product::get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string",
            "description" => "required",
            "product_image" => "required|image",
            "open_price" => "required|numeric",
            "start_date" => "required",
            "end_date" => "required|after:start_date"
        ]);

        $data['status'] = "onprocess";
        $data['product_image'] = $data['product_image']->store('Products', 'public');
        Product::create($data);

        return to_route('products.index')->with('message', "Product Successfully Created");
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            "name" => "required|string",
            "description" => "required",
            "product_image" => "image|mimes:png,jpg,jpeg,gif",
            "open_price" => "required|numeric",
            "start_date" => "required",
            "end_date" => "required|after:start_date"
        ]);

        if ($request->hasFile('product_image')) {
            $data['product_image'] = $data['product_image']->store('Products', 'public');
            Storage::disk('public')->delete($product->product_image);
        } else {
            $data['product_image'] = $product->product_image;
        }

        $product->update($data);

        return to_route('products.show', $product)->with('message', 'Product Successfully Updated');
    }

    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->product_image);
        $product->delete();
        return to_route('products.index')->with('message', 'Product Successfully Deleted');
    }
}
