<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $fields = $request->validate(
            [
                'name' => 'required|max:255',
                'description' => 'required',
                'price' => 'required|numeric'
            ]
        );

        $product = Product::create($fields);

        return response()->json($product, 201);
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(Request $request, Product $product)
    {
        $fields = $request->validate(
            [
                'name' => 'required|max:255',
                'description' => 'required',
                'price' => 'required|numeric'
            ]
        );

        $product->update($fields);

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return ['Message' => "Deleted successfully"];
    }
};