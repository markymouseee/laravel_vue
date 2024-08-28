<?php

namespace App\Http\Controllers;


use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index(){
        return Inertia::render('Frontend/Homepage');
    }

    public function about(){
        return Inertia::render('Frontend/Aboutpage', [
            'title' => 'About Page'
        ]);
    }

    public function login(){
        return Inertia::render('Frontend/Loginpage');
    }

    public function dashboard(){
        return Inertia::render('Dashboard');
    }
}
