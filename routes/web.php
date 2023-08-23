<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserRegister;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', UserRegister::class);
Route::get('/dashboard', Dashboard::class)->middleware('auth');
