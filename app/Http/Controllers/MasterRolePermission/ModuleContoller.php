<?php

namespace App\Http\Controllers\MasterRolePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleContoller extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }
}
