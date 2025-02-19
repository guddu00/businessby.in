<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact_Us; // Fixed model name
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class Contact_UsController extends Controller
{
    public function create()
    {
        return view('pages.contact-us'); // Ensure 'resources/views/contact.blade.php' exists
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|string|email|unique:contact_us,email',
            'phone_No' => 'required|string|max:15',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:800', // Fixed 'text' to 'string'
        ]);

        $contact=Contact_Us::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_No' => $request->phone_No, // Added missing field
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        toastr()->success('Your message has been submitted!.');
        return redirect('/contact')->with('success', 'Your message has been submitted!');
    }

    public function index()
    {
        $contacts = Contact_Us::all();
        return response()->json($contacts);
    }

}
