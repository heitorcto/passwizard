<?php

namespace App\Livewire;

use App\Models\Container;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Modal extends Component
{
    #[Rule('string')]
    public $name;

    #[Rule('string')]
    public $username;

    #[Rule('string')]
    public $email;

    #[Rule('string')]
    public $password;

    #[Rule('string')]
    public $observation;

    public $modal;

    public function render()
    {
        return view('livewire.modal');
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
    }

    public function resetAll()
    {
        $this->reset('name', 'username', 'email', 'password', 'observation', 'modal');
    }

    public function create()
    {
        $data = $this->validate();
        $this->dispatch('create', data: $data);
    }
}
