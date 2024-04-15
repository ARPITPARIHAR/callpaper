<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function store(Request $request)
    {
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
            $file->storeAs('public/galleys', $fileName);
            $form->galleys = $fileName;
        }
        $form->page = $request->page;
        $form->save();
        // dd('Form data saved successfully.');
        return redirect()->back()->with('success', 'Form submitted successfully!')->with('scrollToProjectForm', true);


    }
}
