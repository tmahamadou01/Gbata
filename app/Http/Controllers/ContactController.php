<?php

namespace App\Http\Controllers;

use App\Mail\contactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact.index');
    }

    public function send(Request $request){

        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        /*$contactName = $request->get('nom');
        $contactSecondName = $request->get('prenom');
        $contactEmail = $request->get('email');
        $contactMessage = htmlspecialchars($request->get('message'));

        $data = array(
            'name' => $contactName,
            'second' => $contactSecondName,
            'email' => $contactEmail,
            'message' => $contactMessage
        );


        Mail::send('email.contact', $data, function($message) use ($contactEmail, $contactName)
        {
            $message->from($contactEmail, $contactName);
            $message->to('allhas.simon@gmail.com', 'GBATA')->subject('PRISE DE CONTACT');
        });*/

        $email_user = $request->get('email');

        Mail::send('email.contact',
            array(
                'name' => $request->get('nom'),
                'second' => $request->get('prenom'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message) use ($email_user)
            {
                $message->from($email_user);

                $message->to('gbata225@gmail.com', 'GBATA')->subject('Prise de Contact');

                //$message->to('mahamadoutraore1@gmail.com', 'GBATA')->subject('Prise de Contact');

            });

        return redirect()->route('contact.index')->with('success', 'Merci, nous vous repondrons dans moin de 48h');
    }
}
