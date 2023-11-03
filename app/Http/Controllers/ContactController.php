<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('pages.contact.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'message' => 'required'
        ]);

        ContactPage::create($request->all());

        return redirect()->back()
            ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
