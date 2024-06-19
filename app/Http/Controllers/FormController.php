<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'article' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'keywords' => 'required',
            'reference' => 'required',
            'author' => 'required',
            'galleys' => 'required|file|mimes:pdf,doc,docx', // Allow PDF, DOC, DOCX files
        ]);

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
            $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique file name

            // Store the file in the public/galleys directory
            $file->move(public_path('galleys'), $fileName);

            // Save the file name to the database
            $form->galleys = $fileName;
        } else {
            // If 'galleys' input is empty, show error message
            return redirect()->back()->withInput()->with('error', 'Please upload a valid file for galleys.');
        }

        $form->save();

        // Generate URL for the uploaded file
        $fileUrl = asset('galleys/' . $fileName);

        // Redirect back with success message and file URL
        return redirect()->back()->with([
            'success' => 'Form submitted successfully!',
            'scrollToProjectForm' => true,
            'fileUrl' => $fileUrl, // Pass fileUrl to the view
        ]);
    }

}
