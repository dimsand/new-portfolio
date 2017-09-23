<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function infos_site(){
        return view('admin.dashboard');
    }
    public function competences(){
        return view('admin.dashboard');
    }
    public function parcours(){
        return view('admin.dashboard');
    }
    public function projets(){
        return view('admin.dashboard');
    }
    public function media(){
        return view('admin.dashboard');
    }
}
