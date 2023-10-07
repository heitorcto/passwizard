<?php

namespace App\Livewire;

use App\Mail\ConfirmAccount;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Profile - Settings')]
class UserProfileSettings extends Component
{
    public $name;

    public $email;

    public $password;

    public $passwordError;

    public function mount()
    {
        $user = User::findOrFail(Auth::user()->id);
        $this->fill(
            $user->only('name', 'email')
        );
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|min:5|email:rfc,dns|unique:users,email,' . Auth::user()->id,
            'password' => 'required|min:8'
        ];
    }

    public function render()
    {
        return view('livewire.user-profile-settings');
    }

    public function verifyPassword() // criar Rule
    {
        !Hash::check($this->password, Auth::user()->password)
        ? $this->passwordError = 'Credencial inválida'
        : $this->reset('passwordError');
    }

    public function saveChanges()
    {
        $this->verifyPassword();

        $this->validate();

        $user = User::where('id', Auth::user()->id);

        $user->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        if ($this->email !== Auth::user()->email) {
            $userHashMail = md5(uniqid(time()));

            $user->update([
                'email_verified_at' => null,
                'url_hash' => $userHashMail
            ]);

            Mail::to($this->email)->send(new ConfirmAccount(Auth::user()->name, $userHashMail));
        }

        $this->reset('password');
    }
}
