<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function store()
    {
        if (Auth::attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        return redirect()->route('cabinet');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
