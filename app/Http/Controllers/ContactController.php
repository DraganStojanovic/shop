<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactRequest;
use App\Models\Contact;
use App\Repositories\ContactRepository;
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
        return view('all-contacts', [
            "contacts" => Contact::all(),
        ]);
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }

    public function sendContact(SendContactRequest $request)
    {
        $this->contactRepo->createNew($request);
        return redirect()->route('all-contacts');
    }

    public function singleContact($id)
    {
        $contact = Contact::findOrFail($id);
        return view("edit-contact", compact('contact'));
    }

    public function save(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('all-contacts');
    }
}
