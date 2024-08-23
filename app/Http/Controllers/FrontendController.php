<?php

namespace App\Http\Controllers;


use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index(){
        return Inertia::render('Frontend/Homepage');
    }
}
