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
        return view('admin.infos_site');
    }
    public function competences(){
        return view('admin.competences');
    }
    public function experience(){
        return view('admin.experience');
    }
    public function projets(){
        return view('admin.projets');
    }
    public function media(){
        return view('admin.media');
    }
}
