<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string"
        ]);

        Category::create($data);
        return to_route('categories.index')->with('message', 'Category Successfully Created');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.index')->with('message', 'Category Successfully Deleted');
    }
}
