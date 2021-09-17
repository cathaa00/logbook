<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class MahasiswaMagangController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('mahasiswa_magang.home', compact('user'));
    }
}
