<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('pages.blog.category.index', compact('categories'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);
        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Blog category created successfully');
    }


    public function update(Request $request, Category $category)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
        ]);

        // Update the Blog category model with the validated data
        $category->update($data);

        return redirect()->route('categories.index')->with('success', 'Blog category updated successfully');
    }


    public function destroy(Category $category)
    {
        // Delete the resource from the database
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Blog category deleted successfully');
    }
}
