<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class MahasiswaHibahController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('mahasiswa_hibah.home', compact('user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('mahasiswa_hibah.input_logbook', compact('user'));
    }
}
