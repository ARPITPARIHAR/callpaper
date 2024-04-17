<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Contact; // Assuming your model is named 'Form'
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }

    public function home()
    {
        return view('admin.home');
    }


    public function viewPDF($id)
    {
        $form = Form::findOrFail($id); // Assuming your Form model has primary key 'id'
        
        // Assuming 'galleys' column stores PDF file names
        $pdfFileName = $form->galleys;
        
        // You can return a view to display the PDF, or redirect to the actual PDF file
        // For example, if the PDFs are stored in 'storage/galleys' directory, you can return a redirect to it
        return redirect(asset('storage/galleys/' . $pdfFileName));
    }

 public function showContacts()
    {
        $contacts = Contact::all();
        return view('forms.contact', compact('contacts'));
    }

}
