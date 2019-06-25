<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Experience;
use App\Techno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technos = Techno::orderBy('note','desc')->get();
        $experiences = Experience::with('company')->orderBy('date_debut','desc')->get();
        return view('index', [
            'technos' => $technos,
            'experiences' => $experiences
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
            return Response::json(array('success'=>false, 'errors'=>$validator->errors()));
        }

        Contact::create($request->all());

        if(!Mail::send(['html' => 'emails.contact'],
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'body_message' => nl2br($request->get('body_message'))
            ), function($message) use ($request)
            {
                $message->from("contact@dimitrisandron.fr");
                $message->to('dimitri.sandron@outlook.fr', 'Dimitri Sandron');
                $message->subject('Email de contact');
            })){
            return Response::json(array('success'=>false, 'errors'=>"Erreur lors de l'envoi."));
        }

        return Response::json(array('success'=>true, 'message'=>'Votre message a bien été envoyée.'));
    }
}
