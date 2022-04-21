<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateContact;
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

    public function create(){
        return view('contact.create_form');
    }

    public function store(StoreUpdateContact $request){
        $contact = new Contact();
        $contact->create($request->except(['_token']));

        return redirect()->route('contact.index');

    }

    public function edit($id){
        $contact = Contact::where('id', '=', $id)->get()->toArray();

        return view('contact.edit')->with(compact('contact'));
    }

    public function update(StoreUpdateContact $request){

        Contact::where('id', '=', $request->id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email
        ]);
        return redirect()->route('contact.index');

    }

    public function delete($id){
        $contact = Contact::where('id', '=', $id)->get()->toArray();

        return view('contact.delete')->with(compact('contact'));
    }

    public function destroy(Request $request){
        Contact::find($request->id)->delete();

        return redirect()->route('contact.index');
    }
}
