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
}
