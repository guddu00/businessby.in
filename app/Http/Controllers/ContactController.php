<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contactus');
    }
    public function storecontact(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'comment' => 'nullable|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    
    public function contactdetails()
    {
        $contacts = Contact::all(); 
        return view('admin.contactus', compact('contacts'));
    }

    public function deleteContacts($id)
    {
      Contact:: find($id)->delete();
      return redirect()->back();
    }

    public function edit($id)
{
    $contact = Contact::findOrFail($id);
    return view('admin.edit', compact('contact'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'fname' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'subject' => 'required|string|max:255',
        'comment' => 'required|string',
    ]);

    $contact = Contact::findOrFail($id);
    $contact->update($request->all());

    return redirect()->route('admin.contactsus')->with('success', 'Contact updated successfully');
}

    
}
