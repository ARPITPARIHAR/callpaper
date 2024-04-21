<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        //     'galleys' => 'required|file|mimes:pdf', // Ensure 'galleys' is a required PDF file input
        //     'issue' => 'required',
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
    
        // Handle file upload
        if ($request->hasFile('galleys')) {
            $file = $request->file('galleys');
            
            // Ensure the file is a PDF
            if ($file->getClientOriginalExtension() !== 'pdf') {
                return redirect()->back()->withInput()->with('error', 'Only PDF files are allowed for galleys.');
            }
    
            $fileName = $file->getClientOriginalName();
    
            // Store the file in the public/galleys directory
            $file->move(public_path('galleys'), $fileName);
    
            // Save the file name to the database
            $form->galleys = $fileName;
        } else {
            // If 'galleys' input is empty, show error message
            return redirect()->back()->withInput()->with('error', 'Please upload a PDF file for galleys.');
        }
    
        $form->issue = $request->issue;
        $form->page = $request->page;
    
        $form->save();
    
        // Generate URL for the PDF file
        $pdfUrl = asset('galleys/' . $fileName);
    
        // Redirect back with success message
        return redirect()->back()->with([
            'success' => 'Form submitted successfully!',
            'scrollToProjectForm' => true,
            'pdfUrl' => $pdfUrl, // Pass $pdfUrl to the view
        ]);
    }
    
    
}

