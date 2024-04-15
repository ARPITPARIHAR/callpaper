<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

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
            // Send email notification
            Mail::to('ankurparihar111@gmail.com')->send(new ContactFormSubmitted($contact));

            // Redirect to a thank you page after successful submission
            return Redirect::route('thank-you')->with('contactSuccess', 'Form submitted successfully!');
        } else {
            // Validation errors, redirect with error message and keep form data pre-filled
            return redirect()->back()->withErrors(['message' => 'Validation errors occurred. Please check your input.'])
                ->withInput()
                ->with('scrollToContactForm', true);
        }
    }
}


