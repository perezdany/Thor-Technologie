<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\Mailsender;

class ControllerMails extends Controller
{
    //Controller qui se charge d'envoyer les mails

    public function userconfirm()
    {
        //confirmation de l'utilisateur qui s'est fait enregistré
        $array_user = ['email' => 'user@test.com', 'name' => 'Dupont'];
        Mail::to($array_user['email'])->send(new Mailsender($array_user));
        
        return view("welcome");
    }
}
