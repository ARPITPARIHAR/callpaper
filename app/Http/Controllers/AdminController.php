<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Contact; // Assuming your model is named 'Form'
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminController extends Controller
{
    public function index()
{
    $forms = Form::paginate(10); // Paginate the query with 10 entries per page
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
    
    // Check if the file exists
    if ($pdfFileName && file_exists(public_path('galleys/' . $pdfFileName))) {
        // Get the full path to the PDF file
        $filePath = public_path('galleys/' . $pdfFileName);
        
        // Return the file as a response
        return response()->file($filePath);
    } else {
        // Handle file not found error
        return redirect()->back()->with('error', 'PDF file not found.');
    }
}



 public function showContacts()
    {
        $contacts = Contact::paginate(10);
        return view('forms.contact', compact('contacts'));
    }

    public function delete($id)
    {
        $form = Form::findOrFail($id); // Find the form entry by its ID
        $form->delete(); // Delete the form entry
        return redirect()->back()->with('success', 'Form data deleted successfully.'); // Redirect back with success message
    }

}
