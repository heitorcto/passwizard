<?php

namespace App\Livewire;

use App\Models\Container;
use App\Rules\Passwizard;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class FormModal extends Component
{
    #[Rule('required|string|max:255')]
    public $name;

    #[Rule('nullable|string|max:255')]
    public $username;

    #[Rule('nullable|email:rfc,dns|max:255')]
    public $email;

    #[Rule(['required', 'string', new Passwizard, 'max:255'])]
    public $password;

    #[Rule('nullable|string')]
    public $observation;

    public $modal;

    public $edit = false;

    public $delete = false;

    public $id;

    public function render()
    {
        return view('livewire.form-modal');
    }

    #[On('open-modal')]
    public function openModal()
    {
        $this->modal = 'modal-open';
    }

    #[On('access-container')]
    public function setContainer($id)
    {
        $container = Container::findOrFail($id);

        $this->fill(
            $container->only('name', 'username', 'email', 'password', 'observation')
        );

        $this->edit = true;
        $this->id = $id;
    }

    public function create()
    {
        $data = $this->validate();
        $this->dispatch('create', data: $data);
        $this->resetAll();
    }

    public function update()
    {
        $data = $this->validate();
        $this->dispatch('update', id: $this->id, data: $data);
        $this->resetAll();
    }

    public function deleteConfirmation()
    {
        $this->delete = $this->delete ? false : true;
    }

    public function deleteContainer()
    {
        $this->dispatch('delete-container', id: $this->id);
        $this->resetAll();
    }

    public function generatePassword()
    {
        $last = fake()->randomElements(['number', 'lowerLetter', 'upperLetter', 'special'])[0];
        $password = '';

        for ($index = 0; $index <= 2; $index++) {
            if ($last !== 'number') {
                $password .= fake()->randomNumber(2);
                $last = 'number';
            }

            if ($last !== 'lowerLetter') {
                $password .= fake()->randomLetter();
                $last = 'lowerLetter';
            }

            if ($last !== 'upperLetter') {
                $password .= strtoupper(fake()->randomLetter());
                $last = 'upperLetter';
            }

            if ($last !== 'special') {
                $password .= fake()->randomElements(['!', '@', '#', '$', '%', '&', '*', '(', ')', '~', '^', '{', '}'])[0];
                $last = 'special';
            }
        }

        $this->password = $password;
    }

    public function resetAll()
    {
        $this->reset('name', 'username', 'email', 'password', 'observation', 'modal', 'edit', 'delete', 'id');
    }
}
