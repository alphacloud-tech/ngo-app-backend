<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class MainController extends Controller
{

    /* public function __construct()
    {
        $this->middleware('auth');
    }

 */
    public function index()
    {
        return view('main.userArea');
    }

    public function imagePath()
    {
        //return "https://www.fhc.mbrcomputers.net/";
        // return "/images";
        return "http://127.0.0.1:8000";
    }
}
