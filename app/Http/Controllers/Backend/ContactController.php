<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index() {
        $contact = Contact::firstOrFail();

        return view('backend.contact.index', compact('contact'));
    }

    public function store(Request $request) {
        $contact = Contact::firstOrFail();
        $contact->name = $request->name;
        $contact->address = $request->addr;
        $contact->email = $request->email;
        $contact->tel = $request->tel;
        $contact->facebook = $request->facebook;
        $contact->save();

        return redirect()->route('backend.contact.index')->with('alert', 'success');
    }
}
