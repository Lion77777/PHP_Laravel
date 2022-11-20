<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormValidationController extends Controller
{
    public function createUserForm(Request $request) {
        return view('form');
    }

    public function UserForm(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Form::create($request->all());

        return back()->with('success', '');
    }
}
