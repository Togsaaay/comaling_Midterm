<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductControllers extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required',
        ]);

        $product = Product::create($validated);
    }

    public function show($id)
    {
        $product = Product::all($id);
    }

    public function update(Request $request, $id)
    {
        $product = Product::all($id);

        $validated = $request->validate([
            'name' => 'required=',
            'description' => 'nullable',
            'price' => 'required',
        ]);

        $product->update($validated);

    }

    public function destroy($id)
    {
        $product = Product::all($id);
        $product->delete();

    }
};
