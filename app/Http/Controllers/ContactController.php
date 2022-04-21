<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact.index')->with(compact('contacts'));
    }

    public function detail($id){
        $contact = Contact::find($id);

        return view('contact.detail')->with(compact('contact'));
    }
}
