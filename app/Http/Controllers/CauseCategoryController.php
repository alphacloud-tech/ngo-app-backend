<?php

namespace App\Http\Controllers;

use App\CauseCategory;
use Illuminate\Http\Request;

class CauseCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $causeCategories = CauseCategory::all();
        return view('pages.cause.category.index', compact('causeCategories'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);
        CauseCategory::create($data);

        return redirect()->route('causes-list-category.index')->with('success', 'cause category created successfully');
    }


    public function update(Request $request, CauseCategory $causes_list_category)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
        ]);

        // Update the cause category model with the validated data
        $causes_list_category->update($data);

        return redirect()->route('causes-list-category.index')->with('success', 'cause category updated successfully');
    }


    public function destroy(CauseCategory $causes_list_category)
    {
        // Delete the resource from the database
        $causes_list_category->delete();

        return redirect()->route('causes-list-category.index')->with('success', 'cause category deleted successfully');
    }
}
