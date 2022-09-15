<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create(){
        return view('contact');
    }

    public function store(Request $request){
        Mail::to('fabrice.toyi@ifnti.com')->send(new Contact($request->except('_token')));
        return view('confirm');
    }
}
