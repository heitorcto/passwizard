<?php

use App\Livewire\Dashboard;
use App\Livewire\UserConfirmAccount;
use App\Livewire\UserProfileSettings;
use App\Livewire\UserSecuritySettings;
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
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/settings/profile', UserProfileSettings::class)->name('user.profile.settings');
    Route::get('/settings/security', UserSecuritySettings::class)->name('user.security.settings');
    // Route::get('/settings/security', UserThemeSettings::class)->name('user.theme.settings');
    // Route::get('/settings/security', UserProSettings::class)->name('user.pro.settings');
    Route::get('/signout', UserSignOut::class)->name('user.signout');
});
