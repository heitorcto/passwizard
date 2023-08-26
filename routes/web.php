<?php

use App\Livewire\UserConfirmAccount;
use App\Livewire\Dashboard;
use App\Livewire\UserSignIn;
use App\Livewire\UserSignOut;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserSignup;

// atribuir name ('user')
Route::get('/signup', UserSignup::class)->name('signup');
Route::get('/signout', UserSignOut::class)->name('signout');
Route::get('/signin', UserSignIn::class)->name('signin');
Route::get('/confirm-account/{hash}', UserConfirmAccount::class);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class);
});

Route::get('/mailer', function () {
    return view('mail.url-signup');
});
