<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
//        $contacts = ContactModel::all();
//
//        return view('all-contacts', [
//            "contacts" => $contacts,
//        ]);

        return view('all-contacts', [
            "contacts" => ContactModel::all(),
        ]);

    }
    public function sendContact(Request $request)
    {
        $request->validate([
           'email'  => 'required|string',
            'subject' => 'required|string|min:5',
            'message' => 'required|string'
    ]);
        ContactModel::create([
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);

        return redirect('/shop');
    }
}
