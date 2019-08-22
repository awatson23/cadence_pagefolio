<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contactCreate()
    {
        return view('contact');
    }

    public function contactStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
            ]);
           
            contactCreate::create($request->all());
           return back()->with('success', 'Thanks for contacting us!');
    }
}
