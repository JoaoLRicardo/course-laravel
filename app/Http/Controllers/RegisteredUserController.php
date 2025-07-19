<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate
        $attibutes = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:250', 'confirmed'],
            'password' => ['required', Password::min(6)],
        ]);

        $user = User::create($attibutes);

        Auth::login($user);

        return redirect('/jobs');
    }

}
