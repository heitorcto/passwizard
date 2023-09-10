<?php

namespace App\Livewire;

use App\Mail\ConfirmAccount;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class WarningModal extends Component
{
    public function resendMail()
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->url_hash = md5(uniqid(time()));
        $user->save();

        Mail::to($user->email)->send(new ConfirmAccount($user->name, $user->url_hash));
    }

    public function render()
    {
        return view('livewire.warning-modal');
    }
}
