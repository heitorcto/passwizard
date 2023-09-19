<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserSecuritySettings extends Component
{
    // public $name, $email;

    // public function mount()
    // {
    //     $user = User::findOrFail(Auth::user()->id);
    //     $this->fill(
    //         $user->only('name', 'email')
    //     );
    // }

    public function render()
    {
        return view('livewire.user-security-settings');
    }
}
