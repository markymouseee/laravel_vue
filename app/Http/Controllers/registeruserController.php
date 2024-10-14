<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Models\RegisteredUsers;
use Illuminate\Support\Facades\Hash;

class registeruserController extends Controller
{
    public function create(loginRequest $request){

        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);

        $user = RegisteredUsers::create($validated);

        return redirect()->route('dashboardui');

    }
}
