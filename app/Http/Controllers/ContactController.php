<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactRepo;

    public function __construct()
    {
        $this->contactRepo = new ContactRepository();
    }
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

    public function delete(Contact $contact)
    {
        $singleContact->delete();

        return redirect()->back();
    }

    public function sendContact(SendContactRequest $request)
    {
        $this->contactRepo->createNew($request);

        return redirect('/all-contacts');
    }

    public function singleContact(Request $request, $id)
    {
        $contact = Contact::where('id', $id)->first();
        if($contact === NULL)
        {
            die('Contact is not found');
        }
        return view("edit-contact", compact('contact'));

    }

    public function save(Request $request, $id)
    {
        $contact = Contact::where(['id'=> $id])->first();
        if($contact === NULL)
        {
            die('Contact is not found');
        }

        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $contact->save();

        return redirect()->back();
}

}
