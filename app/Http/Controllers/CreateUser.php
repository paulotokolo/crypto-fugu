<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Auth;


class CreateUser extends Controller
{
    public function create(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required'],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6'],
            'phone' => ['required', 'numeric']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        return redirect('dashboard');
    }
}
