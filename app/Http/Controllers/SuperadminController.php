<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SuperadminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('superadmin.home', compact('user'));
    }
}
