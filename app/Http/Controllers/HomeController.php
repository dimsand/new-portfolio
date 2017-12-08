<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body_message' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        }

        Contact::create($request->all());

        Mail::send(['html' => 'emails.contact'],
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'body_message' => nl2br($request->get('body_message'))
            ), function($message)
            {
                $message->from('d.sandron@it-akademy.fr');
                $message->to('d.sandron@it-akademy.fr', 'Dimitri Sandron');
                $message->subject('Email de contact');
            });

        return redirect('/#contact')->with('success', 'Votre message a bien été envoyé.');
    }
}
