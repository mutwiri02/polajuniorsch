<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm; // Assuming you have a model named ContactForm

class ContactController extends Controller
{
    public function submitContactForm(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Save the contact form data
        $contact = new ContactForm();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->address = $request->input('address');
        $contact->message = $request->input('message');
        $contact->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
