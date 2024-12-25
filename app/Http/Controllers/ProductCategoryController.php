<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function show($id)
    {
        $category = ProductCategory::find($id);

        if (!$category) {
            return response()->json(['error' => 'Product category not found'], 404);
        }

        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = ProductCategory::find($id);

        if (!$category) {
            return response()->json(['error' => 'Product category not found'], 404);
        }

        $category->update($request->all());

        return response()->json($category);
    }

    public function destroy($id)
    {
        $category = ProductCategory::find($id);

        if (!$category) {
            return response()->json(['error' => 'Product category not found'], 404);
        }

        $category->delete();

        return response()->json(null, 204);
    }
}
