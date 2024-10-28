<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return View('frontend.contact');
    }
    public function store(Request $request)
    {

        try {
            $data = $request->validate([
                'fullname' => 'required',
                'email' => 'required',
                'phonenumber' => 'required',
                'message' => 'nullable',

            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }


        $newContact = Contact::create($data);


        return redirect()->route('frontend.new');
    }

    public function new()
    {
        $contacts = Contact::all();
        return view('frontend.new', ['contacts' => $contacts]);
    }

    public function edit(Contact $contact)
    {
        return view('frontend.edit', ['contact' => $contact]);
    }

    public function update(Contact $contact, Request $request)
    {


        $data = $request->validate([

            'fullname' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'message' => 'nullable',

        ]);


        $contact->update($data);

        return redirect(route('frontend.new'))->with('success', 'contact updated successfully');
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect(route('frontend.new'))->with('success', 'contact deleted successfully');
    }

}
