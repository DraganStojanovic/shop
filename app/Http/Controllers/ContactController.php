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
}
