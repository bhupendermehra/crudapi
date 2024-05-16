<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function adding(Request $request)
    {
        // Validate the incoming request data
        $items = $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'quantity' => 'required|numeric',
            // Add more validation rules as needed
        ]);
        $items = new Products();
        $items->name = $request->name;
        $items->price = $request->price;
        $items->quantity = $request->quantity;

        $items->save();
        // Return a response indicating success
        return response()->json('Product created successfully');

    }

    public function edit(Request $request){
        $items = Products::findOrFail($request->id);
        $items->name = $request->name;
        $items->price = $request->price;
        $items->quantity = $request->quantity;

        $items->update();
        return response()->json('Product Updated successfully');

    }
    public function delete(Request $request)
    {
        $items = Products::findOrFail($request->id)->delete();
        return response()->json('Product Delete successfully');
    }
    public function getdata()
    {
        $items = Products::all();

        return response()->json($items);
    }
}
