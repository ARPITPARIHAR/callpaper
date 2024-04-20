<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function store(Request $request)
{
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
        $fileName = $file->getClientOriginalName();

        // Store the file in the public directory
        $file->move(public_path('galleys'), $fileName);

        // Save the file name to the database
        $form->galleys = $fileName;
    }

    $form->issue = $request->issue;
    $form->page = $request->page;

    $form->save();

    // Generate URL for the PDF file
    $pdfUrl = url('galleys/' . $fileName);

    // Redirect back with success message and PDF URL
    return redirect()->back()->with([
        'success' => 'Form submitted successfully!',
        'scrollToProjectForm' => true,
        'pdfUrl' => $pdfUrl,
    ]);

}
}

    
    



