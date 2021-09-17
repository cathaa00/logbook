<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MahasiswaWorkshopController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('mahasiswa_workshop.home', compact('user'));
    }
}
