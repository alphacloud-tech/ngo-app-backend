<?php

namespace App\Http\Controllers;

use App\Complain;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index.index');
    }

    public function message()
    {
        $data['messages'] = Complain::latest() // Retrieve the latest blog
            // ->take(6)
            ->get();
        return view('pages.contact.index', $data);
    }


    public function messageDestroy(Complain $id)
    {
        // Delete the resource from the database
        $id->delete();

        return redirect()->route('messages.message')->with('success', 'Message/Complains deleted successfully');
    }
}
