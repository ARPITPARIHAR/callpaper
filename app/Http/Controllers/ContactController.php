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
           
             Mail::to([ 'ankurparihar111@gmail.com', ])->send(new ContactFormSubmitted($contact));

           return Redirect::back()->with('contactSuccess', 'Form submitted successfully!#contact-form')->withInput();
        } else {
          
            return redirect()->back()->withErrors(['message' => 'Validation errors occurred. Please check your input.'])
                ->withInput()
                ->with('scrollToContactForm', true);
        }
    }
}

