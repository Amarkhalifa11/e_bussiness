<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    

    public function index()
    {
        return view('frontend.contact');
    }

    public function all_contacts()
    {
        $contacts = Contact::all();
        return view('backend.contacts.all_contacts' , compact('contacts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $name    = $request->name;
        $email   = $request->email;
        $phone   = $request->phone;
        $message = $request->message;

        $contacts = Contact::create([
            'name'     =>$name,
            'email'    =>$email,
            'phone'    =>$phone,
            'message'  =>$message,
        ]);

        $contacts->save();

        return redirect()->back();
    }

    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();

        return redirect()->route('dashboard.all_contacts');
    }
}
