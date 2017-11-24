<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos_site_presentation = DB::table('site_infos')->where('info', "PRESENTAION")->first();
        return view('home', [
            'infos_site_presentation' => $infos_site_presentation
        ]);
    }
}
