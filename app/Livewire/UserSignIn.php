<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Entrar')]
class UserSignIn extends Component
{
    #[Rule('required|min:5|email:rfc,dns')]
    public $email;

    #[Rule('required|min:8')]
    public $password;

    public $signInError;

    /**
     * Método reservado do livewire.
     * Responsável por verificar se o usuário está logado e o redireciona para a dashboard.
     *
     * @return void
     */
    public function rendering()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
    }

    public function render()
    {
        return view('livewire.user-sign-in');
    }

    public function signIn()
    {
        $this->validate();

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {
            request()->session()->regenerate();

            return redirect('/dashboard');
        } else {
            $this->signInError = 'E-mail ou senha inválidos.';
        }
    }
}
