<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class loginuserController extends Controller
{

public function getUserLogin(Request $request)
{

    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);


    if (Auth::attempt($credentials)) {

        return redirect()->intended(route('dashboardui'));
    }

    return Inertia::render('Frontend/Loginpage', [
        'errors' => [
            'email' => 'Username or email not found, or password is incorrect.'
        ]
    ]);
}
}
