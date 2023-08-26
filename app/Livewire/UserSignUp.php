<?php

namespace App\Livewire;

use App\Mail\ConfirmAccount;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Registrar-se')]
class UserSignUp extends Component
{
    #[Rule('required|min:3')]
    public $name;

    #[Rule('required|min:5|email:rfc,dns|unique:users,email')]
    public $email;

    #[Rule('required|min:3')]
    public $password;

    #[Rule('required|min:3|same:password')]
    public $password_confirmation;

    public $mailSended = false;

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

    /**
     * Método reservado do Livewire.
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.user-sign-up', ['mailSended' => $this->mailSended]);
    }

    /**
     * Método responsável por encaminhar o e-mail de confirmação ao e-mail do usuário e mudar o estado da propriedade "mailSended".
     *
     * @return void
     */
    public function signUp()
    {
        $validated = $this->validate();
        $validated['url_hash'] = md5(uniqid(time()));

        $user = User::create($validated);

        Mail::to($this->email)->send(new ConfirmAccount($user->name, $user->url_hash));

        $this->mailSended = true;
    }
}
