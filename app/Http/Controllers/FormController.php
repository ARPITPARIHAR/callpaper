<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        // $request->validate([
        //     'article' => 'required',
        //     'title' => 'required',
        //     'abstract' => 'required',
        //     'keywords' => 'required',
        //     'reference' => 'required|email',
        //     'author' => 'required',
        //     'galleys' => 'required', // Assuming 'galleys' is a file input
        //     'page' => 'required',
        // ]);
    
        // Create a new form instance and store the data
        $form = new Form();
        $form->article = $request->article;
        $form->title = $request->title;
        $form->abstract = $request->abstract;
        $form->keywords = $request->keywords;
        $form->reference = $request->reference;
        $form->author = $request->author;
        
        // Assuming 'galleys' is a file input, you need to store the file properly
        if ($request->hasFile('galleys')) {
            $file = $request->file('galleys');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('/galleys', $fileName);
            $form->galleys = $fileName;
        }
        $form->issue = $request->issue;
        $form->page = $request->page;
   
        $form->save();
    
        // Generate URL for the PDF file
        $pdfUrl = url('/storage/galleys/' . $fileName); // Adjust this URL based on your file storage configuration
    
        // Send email notification with the PDF URL
        // Mail::to('rahulmnu1@gmail.com')->send(new FormSubmitted($form, $pdfUrl));
        
        // Redirect back with success message
        return redirect()->back()->with([
            'success' => 'Form submitted successfully!',
            'scrollToProjectForm' => true,
            'pdfUrl' => $pdfUrl, // Pass $pdfUrl to the view
        ]);
    }
    
    }
    
    



