<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        $role = Auth::user()->role;
        if($role == "superadmin"){
            return redirect()->to('superadmin');
        } else if($role == "dosen"){
            return redirect()->to('dosen');
        } else if($role == "mahasiswa_magang"){
            return redirect()->to('mahasiswa_magang');
        } else if($role == "mahasiswa_hibah"){
            return redirect()->to('mahasiswa_hibah');
        } else if($role == "mahasiswa_workshop"){
            return redirect()->to('mahasiswa_workshop');
        } else {
            return redirect()->to('logout');
        }
    }
}
