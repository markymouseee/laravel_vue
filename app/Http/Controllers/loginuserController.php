<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class loginuserController extends Controller
{
    public function getUserLogin(Request $request){
        $credentials = $request->only("email", "password");

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return Redirect::route("homepage")->with("success", "Log in successfully");
        }

        return Redirect::back()->withErrors([
            "email" => 'Username or email not found.'
        ]);
    }
}
