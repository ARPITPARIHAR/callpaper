<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        if ($contact->save()) {
            // Successful save, redirect with success message and scroll position
            return redirect()->back()->with('contactSuccess', 'Form submitted successfully!')
                ->with('scrollToContactForm', true);
        } else {
            // Validation errors, redirect with error message and keep form data pre-filled
            return redirect()->back()->withErrors(['message' => 'Validation errors occurred. Please check your input.'])
                ->withInput()
                ->with('scrollToContactForm', true);
        }
    }
}