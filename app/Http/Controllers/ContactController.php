<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
//        $contacts = Contact::all();
//
//        return view('all-contacts', [
//            "contacts" => $contacts,
//        ]);

        return view('all-contacts', [
            "contacts" => Contact::all(),
        ]);

    }

    public function delete($contact)
    {
        $singleContact = Contact::where(['id' => $contact])->first();

        if ($singleContact === null)
        {
            die('Contact is not found!');
        }
        $singleContact->delete();
         return redirect()->back();
    }
    public function sendContact(Request $request)
    {
        $request->validate([
           'email'  => 'required|string',
            'subject' => 'required|string|min:5',
            'message' => 'required|string'
    ]);
        Contact::create([
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);

        return redirect('/shop');
    }
}
