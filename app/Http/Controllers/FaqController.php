<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $faqs = Faq::all();
        return view('pages.faq.index', compact('faqs'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Faq::create($data);

        return redirect()->route('admin-faq.index')->with('success', 'Faq created successfully');
    }


    public function update(Request $request, Faq $admin_faq)
    {
        // Validate the request data
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Update the admin_faq model with the validated data
        $admin_faq->update($data);

        return redirect()->route('admin-faq.index')->with('success', 'Faq updated successfully');
    }


    public function destroy(Faq $admin_faq)
    {
        // Delete the resource from the database
        $admin_faq->delete();

        return redirect()->route('admin-faq.index')->with('success', 'Faq deleted successfully');
    }

    public function activation(Request $request, Faq $admin_faq)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $admin_faq->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
