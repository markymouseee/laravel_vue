<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class loginuserController extends Controller
{
    public function getUserLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('homepage')->with('success', 'Log in successfully');
        }

        // Instead of rendering a view, return an Inertia response with errors
        return redirect()->back()->withErrors([
            'email' => 'Username or email not found.',
        ]);
    }
}
