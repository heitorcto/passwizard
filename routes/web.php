<?php

use App\Livewire\Dashboard;
use App\Livewire\UserConfirmAccount;
use App\Livewire\UserSignIn;
use App\Livewire\UserSignOut;
use App\Livewire\UserSignup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::name('user.')->group(function () {
    Route::get('/signup', UserSignup::class)->name('signup');
    Route::get('/signin', UserSignIn::class)->name('signin');
    Route::get('/confirm-account/{hash}', UserConfirmAccount::class)->name('confirm-account');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class);
    Route::get('/signout', UserSignOut::class)->name('user.signout');
});
