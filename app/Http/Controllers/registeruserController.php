<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class registeruserController extends Controller
{

    /**
     * Summary of getUserRegistration
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    public function getUserRegistration(Request $request): RedirectResponse
    {
        $request->validate([
            "fullname" => 'required|max:200',
            "username" => 'unique:store_users|required|max:200|required',
            'email' => 'unique:store_users|required|max:200|required',
            'password' => ['required', 'confirmed', Rules\Password::default()],
        ]);
    }
}
