<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UserRegister extends Component
{
    #[Rule('required|min:3')]
    public $name;

    #[Rule('required|min:5|email:rfc,dns|unique:users,email')]
    public $email;

    #[Rule('required|min:3')]
    public $password;

    #[Rule('required|min:3')]
    public $confirmPassword;

    public function rendering()
    {
        if (Auth::check()) {
            return $this->redirect('/dashboard');
        }
    }

    public function register()
    {
        $validated = $this->validate();
        Arr::forget($validated, 'confirmPassword');

        User::create($validated);

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            request()->session()->regenerate();

            return $this->redirect('/dashboard');
        }

        return redirect('/')->with('status', 'Post successfully created.');
    }

    public function render()
    {
        return view('livewire.user-register');
    }
}
