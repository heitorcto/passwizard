<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfileSettings extends Component
{
    public $name;

    public $email;

    public function mount()
    {
        $user = User::findOrFail(Auth::user()->id);
        $this->fill(
            $user->only('name', 'email')
        );
    }

    public function render()
    {
        return view('livewire.user-profile-settings');
    }
}
