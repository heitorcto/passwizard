<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserSignOut extends Component
{
    /**
     * Método reservado do Livewire.
     * Responsável por deslogar o usuário e redirecioná-lo a tela de login.
     *
     * @return void
     */
    public function mount()
    {
        Auth::logout();

        request()->session()->invalidate();

        return redirect('/signin');
    }
}
