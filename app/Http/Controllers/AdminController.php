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
        return view('admin.dashboard');
    }

    public function viewPDF($id)
    {
        $form = Form::findOrFail($id); // Assuming your Form model has primary key 'id'

        // Retrieve the file name from the database (assuming it's stored in 'galleys' column)
        $fileName = $form->galleys;

        // Check if the file exists in the 'public/galleys' directory
        if ($fileName && file_exists(public_path('galleys/' . $fileName))) {
            // Generate a URL using the asset helper function
            $fileUrl = asset('galleys/' . $fileName);

            // Pass other necessary variables to your view
            $title = $form->title;
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION); // Determine the file extension

            // Return the view with necessary data
            return view('user.pdf_viewer', [
                'fileUrl' => $fileUrl,
                'fileType' => $fileExtension, // This determines how to handle the file in the view
                'title' => $title,
            ]);
        } else {
            // Handle file not found error
            return redirect()->back()->with('error', 'File not found.');
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

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id); // Find the form entry by its ID
        $contact->delete(); // Delete the form entry
        return redirect()->back()->with('success', 'Form data deleted successfully.'); // Redirect back with success message
    }


}
