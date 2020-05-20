<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $messages = ['name.required' => 'Введіть, будь ласка ім\'я',
            'email.required' => 'Введіть , будь ласка email',
            'email.email' => 'email введено неправильно',
            'password.required' => 'Введіть , будь ласка пароль',
            'password-repeat.required' => 'Введіть , будь ласка підтвердження паролю',
            'password-repeat.same' => 'Пароль та його підтвердження не співпадають',
        ];
        $result = null;
        try {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password-repeat' => 'required|same:password',
            ], $messages);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors());
        }

        $user = User::create(request(['name', 'email', 'password']));

        Auth::login($user, true);

        return redirect()->intended('home');
    }
}
