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

    #[Rule(["required", "string", new Passwizard])]
    public $password;

    #[Rule('nullable|string')]
    public $observation;

    public $modal = '', $edit = false, $delete = false, $id = null;

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

    public function resetAll()
    {
        $this->reset('name', 'username', 'email', 'password', 'observation', 'modal', 'editar', 'edit', 'delete', 'id');
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
}
