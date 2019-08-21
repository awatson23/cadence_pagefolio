<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->all([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        return $request;
    }
}
