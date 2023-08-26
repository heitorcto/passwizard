<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;

class UserConfirmAccount extends Component
{
    public $user;

    /**
     * Método reservado do Livewire.
     * Responsável por logar o usuário ao validar a url.
     *
     * @return void
     */
    public function mount()
    {
        $this->user = User::where('url_hash', request()->hash)->first();

        if ($this->user !== null) {
            $this->user->email_verified_at = Carbon::now();
            $this->user->url_hash = null;
            $this->user->save();

            Auth::login($this->user);

            request()->session()->regenerate();

            return redirect('/dashboard');
        }

        return redirect('/signup');
    }
}
