<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid Credentials'])->withInput();
    }
}
