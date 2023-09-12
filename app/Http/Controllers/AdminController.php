<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index (Request $request)
    {
        $user = $request->user();
        return view('back_end.adminIndex', compact('user'));
    }
}
