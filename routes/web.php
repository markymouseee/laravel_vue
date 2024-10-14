<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\loginuserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registeruserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('homepage');
Route::get('/about', [FrontendController::class, 'about'])->name('aboutpage');
Route::inertia('/contact', 'Frontend/Contactpage')->name('contactpage');

Route::get('/login-student', [FrontendController::class,'login'])->name('loginpage');
Route::post('/login-student', [loginuserController::class,'getUserLogin'])->name('loginuser');

Route::post('/register-user', [registeruserController::class, 'create'])->name('registeruser');


Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('dashboardui');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
