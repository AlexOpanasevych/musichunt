<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class RegistrationController extends Controller
{
    public function store()
    {
        try {
            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password-repeat' => 'required|same:password',
            ]);
        } catch (ValidationException $e) {
            back()->withErrors(['message' => 'Incorrect input!']);
        }

        $user = User::create(request(['name', 'email', 'password']));

        Auth::login($user);

        return redirect()->intended('home');
    }
}
